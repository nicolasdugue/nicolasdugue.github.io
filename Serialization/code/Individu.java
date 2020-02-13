package serialization;

import java.io.Serializable;

public class Individu implements Serializable {
	private String secu;
	private String dateNaissance;
	private String nom;
	private String prenom;	
	public String getSecu() {
		return secu;
	}
	public void setSecu(String secu) {
		this.secu = secu;
	}
	public String getDateNaissance() {
		return dateNaissance;
	}
	public void setDateNaissance(String dateNaissance) {
		this.dateNaissance = dateNaissance;
	}
	public String getNom() {
		return nom;
	}
	public void setNom(String nom) {
		this.nom = nom;
	}
	public String getPrenom() {
		return prenom;
	}
	public void setPrenom(String prenom) {
		this.prenom = prenom;
	}
	public Individu(String secu, String dateNaissance, String nom, String prenom) {
		super();
		this.secu = secu;
		this.dateNaissance = dateNaissance;
		this.nom = nom;
		this.prenom = prenom;
	}
	public Individu() {
		super();
	}
	public String toString() {
		return nom + " " + prenom + " " + dateNaissance + " " + secu;
	}
}
