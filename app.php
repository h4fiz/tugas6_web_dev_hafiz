<?php 

$data = array( 
                array(
                    "product_id"        => "01",
                    "product_image"     => "gambar01.jpg",
                    "product_name"      => "CORSAIR Memory PC 4GB DDR3 PC-12800",
                    "product_desc"      => array("4GB","DDR3","1600Mhz","PC-12800"),
                    "product_price"     => "627.500"
                ),
                array(
                    "product_id"        => "02",
                    "product_image"     => "gambar02.jpg",
                    "product_name"      => "KINGSTON Memory PC 2x 4GB DDR3 PC-15000",
                    "product_desc"      => array("2x4GB kit","DDR3","1866MHz","Non-ECC","PC-15000"),
                    "product_price"     => "1.199.000"
                ),
                array(
                    "product_id"        => "03",
                    "product_image"     => "gambar03.jpg",
                    "product_name"      => "LG LED Monitor 21.5 Inch",
                    "product_desc"      => array("LED Monitor","Ukuran Layar : 21.5-inch","Resolusi : 1920x1080","Waktu Respon : 5 ms (GTG)","Rasio Kontras : 1000:1","Brightness : 250 cd/m²","Input Connector : HDMI;D-Sub"),
                    "product_price"     => "1.850.000"
                ),
                array(
                    "product_id"        => "04",
                    "product_image"     => "gambar04.jpg",
                    "product_name"      => "ACER LED Monitor 21.5 Inch [KG221Q]",
                    "product_desc"      => array("Ukuran Layar : 21.5-inch","Resolusi : 1920x1080","Waktu Respon : 1 ms","Rasio Aspek : 16 : 9","Brightness : 250 cd/m²","Input Signal : VGA/HDMI/Audio In/Audio Out"),
                    "product_price"     => "1.199.000"
                ),
                array(
                    "product_id"        => "05",
                    "product_image"     => "gambar05.jpg",
                    "product_name"      => "GIGABYTE Motherboard Socket LGA1151 [Z370 Aorus Gaming 7]",
                    "product_desc"      => array("Socket LGA1151","4 x DDR4 DIMM sockets","6 x SATA 6Gb/s connectors","1 x PCI Express x16 slot; 3 x PCI Express x1 slots","1 x Intel GbE LAN chip (10/100/1000 Mbit)","USB 3.1"),
                    "product_price"     => "4.700.000"
                ),
                array(
                    "product_id"        => "06",
                    "product_image"     => "gambar06.jpg",
                    "product_name"      => "MSI Motherboard Socket LGA1151 Z370 GAMING M5",
                    "product_desc"      => array("Socket LGA1151","Intel® Z370 Chipset","Realtek® ALC1220 Codec","1 x Killer E2500 Gigabit LAN controller","USB 3.1","ATX Form Factor"),
                    "product_price"     => "3.900.000"
                )
        );
        
        echo json_encode($data);

?>