import { useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faTimes } from "@fortawesome/free-solid-svg-icons";
import { Link } from "@inertiajs/react";
import '@/Components/Menu/Menu.css'

const Menu = ({ closeMenu }) => {
    const [showMenu, setShowMenu] = useState(true);

    const handleMenuClose = () => {
        setShowMenu(false);
        closeMenu(); // Llama a la función para cerrar el menú del componente padre
    };

    const handleItemClick = () => {
        setShowMenu(false); // Cierra el menú al hacer clic en un elemento de la lista
        closeMenu(); // Llama a la función para cerrar el menú del componente padre
    };

    const clientLink = 'https://drive.google.com/drive/folders/1EFgiw7acHF3UB2-huYuu-lkxW_uC5u5U?usp=sharing';


    return (
        <div className={`burguer-menu ${showMenu ? "show" : ""}`}>
            <FontAwesomeIcon className="menu-close" icon={faTimes} onClick={handleMenuClose} />
            <ul className="burguer-menu-options">
                <li><Link className="link-burguer-menu" onClick={handleItemClick} href='/'>INICIO</Link></li>
                <li><Link className="link-burguer-menu" onClick={handleItemClick} href='/events'>EVENTOS</Link></li>
                <li><Link className="link-burguer-menu" onClick={handleItemClick} href='/special-events'>EVENTOS ESPECIALES</Link></li>
                <li><Link className="link-burguer-menu" onClick={handleItemClick} href='/chiapas'>CHIAPAS</Link></li>
                <li><a className="link-burguer-menu" onClick={handleItemClick} href={clientLink}>CLIENTES</a></li>
                <li><Link className="link-burguer-menu" onClick={handleItemClick} href='/contact'>CONTACTO</Link></li>
            </ul>
        </div>
    );
};

export default Menu;