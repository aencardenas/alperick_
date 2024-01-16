import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { Link } from '@inertiajs/react';
import { faBars } from '@fortawesome/free-solid-svg-icons';
import { useMenu } from '@/Context/MenuContext';
import Menu from '@/Components/Menu/Menu';
import '@/Components/Header/Header.css';

const Header = () => {
    const { showMenu, handleMenuClick, closeMenu } = useMenu();

    return (
        <>
            {!showMenu && (
                <header className='main-header'>
                    <Link href='/'><img className='logo-main-header' src='/LOGOBYN.png' alt='Logo Alperick' /></Link>
                    <FontAwesomeIcon className='menu-bars' icon={faBars} onClick={handleMenuClick} />

                </header>
            )}
            {showMenu && <Menu showMenu={showMenu} closeMenu={closeMenu} />}
        </>
    );

}

export default Header;