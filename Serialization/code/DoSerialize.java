package serialization;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.Serializable;

public class DoSerialize {

	public static void serialize(Serializable a, String nom) throws IOException {
		FileOutputStream fos = new FileOutputStream(nom);
		ObjectOutputStream oos = new ObjectOutputStream(fos);
		oos.writeObject(a);
		oos.close();
		fos.close();
	}
	public static Serializable unSerialize(String nom) throws IOException, ClassNotFoundException {
		FileInputStream fos = new FileInputStream(nom);
		ObjectInputStream oos = new ObjectInputStream(fos);
		Serializable a = (Serializable) oos.readObject();
		oos.close();
		fos.close();
		return a;
	}
}
