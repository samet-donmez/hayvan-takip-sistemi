CREATE TABLE hayvanlar (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tur VARCHAR(255) NULL,
    cinsiyet VARCHAR(255) NULL,
    saglik VARCHAR(255) NULL,
    dogum_tarihi DATE NULL,
    bakici VARCHAR(255) NULL,
    gelis_tarihi DATE NULL,
    son_kontrol_tarihi DATE NULL,
    asi_durumu VARCHAR(255) NULL
);

