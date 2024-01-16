import { FaInstagram, FaFacebook, FaWhatsapp } from "react-icons/fa";
import { Link } from "@inertiajs/react";
import '@/Components/Footer/Footer.css';
const Footer = () => {

    return (
        <footer className='main-footer'>
            <div className='company-title'>
                <p className="company-text">Desarrollado por <strong>Somnus Software</strong></p>
            </div>
            <div className='social-media-footer-container'>
                <a className="link-social-media" href="https://www.instagram.com/alperick/"><FaInstagram className="social-media-footer" /></a>
                <a className="link-social-media" href="https://www.facebook.com/people/Erick-Alpe/100063674464793/?locale=es_LA"><FaFacebook className="social-media-footer" /></a>
                <a className="link-social-media" href="https://www.instagram.com/alperick/"><FaWhatsapp className="social-media-footer" /></a>
            </div>
        </footer>
    );

}

export default Footer;