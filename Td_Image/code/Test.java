package image;

import java.awt.image.BufferedImage;
import java.awt.image.Raster;
import java.io.File;
import java.io.IOException;

import javax.imageio.ImageIO;

public class Test {

	/**
	 * @param args BIIIIIMMM !!!!
	 */
	public static void main(String[] args) {
		File f = new File("src/image/Lenna_original.jpg");
		System.out.println(f.getAbsolutePath());
		try {
			BufferedImage image = ImageIO.read(f);
			ImageClass ic = new ImageClass();
			ic.obtainPixelFromImage(image);
			ic.setNEtB(image);
			File fic= new File("test"+ "." + "jpg");
			ImageIO.write(image, "jpg", fic);
			ic.setContour(image);
			fic= new File("test3"+ "." + "jpg");
			ImageIO.write(image, "jpg", fic);
		} catch (IOException e) {
			System.out.println(e);
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

	}

}
