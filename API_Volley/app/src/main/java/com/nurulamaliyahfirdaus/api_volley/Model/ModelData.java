package com.nurulamaliyahfirdaus.api_volley.Model;

public class ModelData {
    String username, grup, nama, password;

    public ModelData(){}
    public ModelData(String username, String grub, String nama, String password) {
        this.username = username;
        this.grup = grub;
        this.nama = nama;
        this.password = password;
    }
    public String getPassword() {
        return password;
    }
    public void setPassword(String password) {
        this.password = password;
    }

    public String getNama() {
        return nama;
    }
    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getUsername() {
        return username;
    }
    public void setUsername(String username) {
        this.username = username;
    }

    public String getGrup() {
        return grup;
    }
    public void setGrup(String grub) {
        this.grup = grub;
    }
}