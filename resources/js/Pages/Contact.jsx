import { FaInstagram, FaFacebook, FaWhatsapp } from "react-icons/fa";
import { Link, usePage } from "@inertiajs/react";
import Header from "@/Components/Header/Header";
import Footer from "@/Components/Footer/Footer";

import { useMenu } from "@/Context/MenuContext";

export default function Contact() {

    const { showMenu } = useMenu();

    return (
        <div className={`contact-container ${showMenu ? 'home-page' : ''}`}>
            <Header />
            <div className={`contact-content ${showMenu ? 'hidden' : ''}`}>
                <img className="icon" src="LogoFondoNegro.jpg" alt="Logo alperick" />
                <div className="contact-wrapper">
                    <div className="contact-number-container">
                        <p className="phone-number">963-106-6692</p>
                    </div>
                    <div className="social-media-container">
                        <a className="link-social-media" href="https://www.instagram.com/alperick/"><FaInstagram className="social-media-logos" /></a>
                        <a className="link-social-media" href="https://www.facebook.com/people/Erick-Alpe/100063674464793/?locale=es_LA"><FaFacebook className="social-media-logos" /></a>
                        <a className="link-social-media" href="tel:+529631066692"><FaWhatsapp className="social-media-logos" /></a>
                    </div>
                </div>

            </div>
            {!showMenu && <Footer />}

        </div>
    );

};
