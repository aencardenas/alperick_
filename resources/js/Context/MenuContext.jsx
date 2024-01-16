import React, { createContext, useState, useContext } from 'react';

const MenuContext = createContext();

export const MenuProvider = ({ children }) => {
    const [showMenu, setShowMenu] = useState(false);

    const handleMenuClick = () => {
        setShowMenu(!showMenu);
    };

    const closeMenu = () => {
        setShowMenu(false);
    };

    return (
        <MenuContext.Provider value={{ showMenu, handleMenuClick, closeMenu }}>
            {children}
        </MenuContext.Provider>
    );
};

export const useMenu = () => useContext(MenuContext);

