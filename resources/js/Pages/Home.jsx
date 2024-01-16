import Menu from "@/Components/Menu/Menu";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBars } from "@fortawesome/free-solid-svg-icons";
import { useState } from "react";

export default function Home() {
    const [showMenu, setShowMenu] = useState(false);

    const handleMenuClick = () => {
        setShowMenu(!showMenu);
    }

    const closeMenu = () => {
        setShowMenu(false);
    }

    return (
        <div className="home-page">
            {!showMenu && (
                <div className="header-home-page">
                    <img className="logo-home-page" src="/LOGOBYN.png" alt="Logo ALPERICK" />
                    <FontAwesomeIcon className="menu-bars" icon={faBars} onClick={handleMenuClick} />
                </div>
            )}
            {showMenu && <Menu closeMenu={closeMenu} />}
        </div>
    );
}