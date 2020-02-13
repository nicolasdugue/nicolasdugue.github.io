package image;

import java.awt.image.BufferedImage;
import java.util.ArrayList;

public class ImageClass {
	ArrayList<Pixel> pixelList = new ArrayList<Pixel>();
	public Pixel getPixel(int i) {
		return pixelList.get(i);
	}
	public void addPixel(Pixel p) {
		pixelList.add(p);
	}
	public void obtainPixelFromImage(BufferedImage image) {
		int hauteur = image.getHeight();
		int largeur = image.getWidth();
		int pixel;
		for (int i = 0; i < largeur; i++) {
			for (int j = 0; j < hauteur ; j++) {
				pixel = image.getRGB(i, j);
		        Pixel p = new Pixel(pixel);
		        this.addPixel(p);
		     
			}
		}
	}
	public void setNEtB(BufferedImage image) {
		int hauteur = image.getHeight();
		int largeur = image.getWidth();
		System.out.println();
		Pixel p;
		for (int i = 0; i < largeur; i++) {
			for (int j = 0; j < hauteur ; j++) {
				p = pixelList.get(i * hauteur + j);
				int nb= p.getNEtB();
				int couleur = (p.getAlpha()<<24)+(nb<<16)+(nb<<8)+nb;
				image.setRGB(i, j, couleur);
			}
		}
	}
	
	
	public void setContour(BufferedImage im) {
		int hauteur = im.getHeight();
		int largeur = im.getWidth();
		for (int i=1;i<im.getHeight();i++)
			for (int j=1;j<im.getWidth();j++)
			{    	            
				int v00=0, v01=0, v02=0, v10=0, v12=0, v20=0, v21=0, v22=0;
				
				int x0 = j-1, x1 = j, x2 = j+1;
				int y0 = i-1, y1 = i, y2 = i+1;
				if (x0<0) 
					x0=0;
				if (y0<0) 
					y0=0;
				if (x2>=im.getWidth()) x2=im.getWidth()-1;
				if (y2>=im.getHeight()) y2=im.getHeight()-1;
				//System.out.println(x0 + " " + y0 + " " +(x0 + y0*hauteur);
				v00=pixelList.get(x0*hauteur + y0).getColor(); v10=pixelList.get(x1*hauteur + y0).getColor(); v20=pixelList.get(x2*hauteur + y0).getColor();
				v01=pixelList.get(x0*hauteur + y1).getColor();                    v21=pixelList.get(x2*hauteur + y1).getColor();
				v02=pixelList.get(x0*hauteur + y2).getColor(); v12=pixelList.get(x1*hauteur + y2).getColor(); v22=pixelList.get(x2*hauteur + y2).getColor();
				
				int sum_r = (((v20>> 16)& 0x000000FF+2* (v21>> 16)& 0x000000FF+(v22>> 16)& 0x000000FF)-((v00>> 16)& 0x000000FF+2*(v01>> 16)& 0x000000FF+(v02>> 16)& 0x000000FF))/4;
		        int sum_g = (((v20>> 8)& 0x000000FF+2*(v21>> 8)& 0x000000FF+(v22>> 8)& 0x000000FF)-((v00>> 8)& 0x000000FF+2*(v01>> 8)& 0x000000FF+(v02>> 8)& 0x000000FF))/4;
		        int sum_b = (((v20 )& 0x000000FF+2* (v21 )& 0x000000FF+(v22 )& 0x000000FF)-((v00 )& 0x000000FF+2*(v01 )& 0x000000FF+(v02 )& 0x000000FF))/4;
		        
                im.setRGB(j, i,(int)(0.299*sum_r + 0.587*sum_g + 0.114*sum_b));
			}
	}
}
