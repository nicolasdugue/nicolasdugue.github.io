package serialization;

import java.io.IOException;

public class TestSerialization {
	public static void main(String[] args) throws IOException, ClassNotFoundException {
		Individu a = new Individu("1895blabklabl", "18101993", "Bob", "Marley");
		DoSerialize.serialize(a, "file");
		Individu s = (Individu) DoSerialize.unSerialize("file");
		System.out.println(s);
	}
}
