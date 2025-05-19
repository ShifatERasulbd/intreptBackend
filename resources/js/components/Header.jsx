import React from 'react';

const Header = () => {
    return (
        <header className="content" itemType="https://schema.org/WPHeader">
            <div
                className="comp-header_main_header__G_1aX"
                style={{
                    transform: 'translate3d(0px, 0px, 0px)',
                    transition: 'transform 500ms ease-in-out',
                }}
            >
                <div className="flex-content-block side-gutters container">
                    <div className="comp-header_main_header_container__fB_W0">
                        <div></div>
                        <div className="comp-header_center__UgA6y">
                            <div className="comp-header_logo__zU5s9 full-header-logo">
                                <a
                                    className="font-white dark:font-black"
                                    target="_self"
                                    title="Homepage"
                                    itemProp="url"
                                    href="https://overture.ovstaging.com"
                                >
                                    <img
                                        width="120"
                                        src="https://overture.ovstaging.com/wp-content/themes/overture-london/assets/imges/main-logo.png"
                                        alt="Overture Logo"
                                    />
                                </a>
                            </div>
                        </div>
                        <div className="comp-header_right__MWw1l">
                            <div className="comp-header_menu_container__6DN0_ hide-on-responsive">
                                {/* Navigation menu can go here if needed */}
                            </div>
                            <div className="header-hamburger_burger_holder__tOCQw">
                                <span className="header-hamburger_line__jOEz4"></span>
                                <span className="header-hamburger_line__jOEz4"></span>
                                <span className="header-hamburger_line__jOEz4"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="header-flyout-menu_flyout_menu_container__tcC_d">
                <div className="header-push"></div>
                <div className="header-flyout-menu_scroll_container__RIOUO">
                    <div className="flex-content-block side-gutters-on-grid">
                        <div className="col-xs-12-12 col-md-6-12 grid-gutters">
                            <div className="header-flyout-menu_left__vt8mh">
                                <nav>
                                    <ul className="header-flyout-menu_main_menu__Es94A">
                                        {[
                                            { label: 'Work', href: '/work' },
                                            { label: 'Services', href: '/services' },
                                            { label: 'People', href: '/people' },
                                            { label: 'Contact', href: '/contact' },
                                        ].map((item, idx) => (
                                            <li className="menu-item" key={idx}>
                                                <div className="header-flyout-menu_menu_item_container__xhVZl">
                                                    <a className="fs-title-5" target="_self" href={item.href}>
                                                        {item.label}
                                                    </a>
                                                </div>
                                            </li>
                                        ))}
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div className="col-xs-12-12 col-md-6-12 grid-gutters">
                            <div className="header-flyout-menu_right___ZD7U">
                                <ul>
                                    <li className="fs-title-7">
                                        Overture London Ltd, <br />
                                        20 North Audley Street, <br />
                                        LONDON <br />
                                        W1K 6WE
                                    </li>
                                    <li className="fs-title-7">
                                        <a href="tel:+4402077696757">+44 (0) 20 7769 6757</a>
                                        <br />
                                        <a href="mailto:hello@overture.london">hello@overture.london</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    );
};

export default Header;
