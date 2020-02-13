package image;

public class Pixel {
	private int x;
	private int y;
	private int r;
	private int g;
	private int b;
	private int alpha;
	public Pixel(int pixel) {
		alpha = (pixel >> 24) & 0x000000FF; 
        /**
         * Shift all pixels 16 bits to the right.
         * Do a logical and with 0x000000FF
         * i.e. 0000 0000 0000 0000 0000 0000 1111 1111
         * You will get the red value for the pixel
         */
        r = (pixel >> 16) & 0x000000FF;
        /**
         * Shift all pixels 8 bits to the right.
         * Do a logical and with 0x000000FF
         * i.e. 0000 0000 0000 0000 0000 0000 1111 1111
         * You will get the green value for the pixel
         */
        g = (pixel >>8 ) & 0x000000FF;
 
        /**
         * Dont do any shift.
         * Do a logical and with 0x000000FF
         * i.e. 0000 0000 0000 0000 0000 0000 1111 1111
         * You will get the blue value for the pixel
         */
       b = (pixel) & 0x000000FF;
	}
	public int getX() {
		return x;
	}
	public void setX(int x) {
		this.x = x;
	}
	public int getY() {
		return y;
	}
	public void setY(int y) {
		this.y = y;
	}
	public int getR() {
		return r;
	}
	public void setR(int r) {
		this.r = r;
	}
	public int getG() {
		return g;
	}
	public void setG(int g) {
		this.g = g;
	}
	public int getB() {
		return b;
	}
	public void setB(int b) {
		this.b = b;
	}
	public int getAlpha() {
		return alpha;
	}
	public void setAlpha(int alpha) {
		this.alpha = alpha;
	}
	public int getNEtB() {
		return (int)(0.299*r + 0.587*g + 0.114*b);
	}
	public int getColor() {
		return (alpha<<24)+(r<<16)+(g<<8)+b;
	}
}
