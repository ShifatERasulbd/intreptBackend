import React, { useEffect, useState } from "react";
import axios from 'axios';

const Insights = () => {
   const [insights, setInsights] = useState([]);
    useEffect(() => {
        setTimeout(() => {
            // Hamburger click handler
            const toggleHamburger = () => {
            document.querySelectorAll('.comp-header_main_header_container__fB_W0').forEach(header => {
                header.classList.toggle('comp-header_active__nxkGN');
            });

            document.querySelectorAll('.header-flyout-menu_flyout_menu_container__tcC_d').forEach(menu => {
                menu.classList.toggle('header-flyout-menu_is_active__NQ4_G');
            });

            document.querySelectorAll('.comp-header_theme_selector_container__z3mks').forEach(menu => {
                menu.classList.toggle('comp-header_active__nxkGN');
            });

            document.querySelectorAll('.header-hamburger_burger_holder__tOCQw').forEach(hamburger => {
                hamburger.classList.toggle('header-hamburger_is_active__x3sIj');
            });
            };

            const burgers = document.querySelectorAll('.header-hamburger_burger_holder__tOCQw');
            burgers.forEach(b => b.addEventListener('click', toggleHamburger));

            // Cursor-follow logic
            const serviceItems = document.querySelectorAll('.insight-wrap .single-insight');

            const followImageCursor = (event, serviceItem) => {
            const rect = serviceItem.getBoundingClientRect();
            const image = serviceItem.children[1];
            const imageWidth = image.offsetWidth;
            const imageHeight = image.offsetHeight;
            const x = event.clientX - rect.left - imageWidth / 2;
            const y = event.clientY - rect.top - imageHeight / 2;
            image.style.transform = `translate(${x}px, ${y}px)`;
            };

            serviceItems.forEach(item => {
            item.addEventListener('mousemove', (e) => followImageCursor(e, item));
            });

            // Accordion logic
            const teamCards = document.querySelectorAll('.insight-wrap .single-insight');
            
            teamCards.forEach(card => {
            const heading = card.querySelector('.insight-title-wrap h3');
            const content = card.querySelector('.insight-content');

            if (heading && content) {
                heading.addEventListener('click', () => {
                const isActive = content.classList.contains('active');

                document.querySelectorAll('.insight-content').forEach(el => {
                    el.classList.remove('active');
                    el.style.height = '0px';
                });

                if (!isActive) {
                    content.classList.add('active');
                    content.style.height = content.scrollHeight + 'px';
                }
                });
            }
            });

            // Clean up
            return () => {
            burgers.forEach(b => b.removeEventListener('click', toggleHamburger));
            serviceItems.forEach(item => item.removeEventListener('mousemove', followImageCursor));
            };
        }, 1000);
    }, []);

  useEffect(() => {
    axios.get('/api/insights')
      .then(response => {
        setInsights(response.data.data);
        console.log('response', response.data);

      })
      .catch(error => {
        console.error('Error fetching team data:', error);
      });
  }, []);

    return (
        <div className="main-insights-wrapper">
            <div className="insight-sections">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-12">
                            <div className="section-title">
                                <h2>Latest Insights</h2>
                            </div>
                            <ul className="insight-wrap">
                                { insights?.length > 0 && insights.map( (item, idx) => (
                                    <li key={idx} className="single-insight">
                                        <div className="insight-title-wrap">
                                            <h6>
                                                <span> { item?.category?.category_name } </span>
                                            </h6>
                                            <h3>{ item?.title }</h3>
                                        </div>
                                        <div className="insight-image">
                                            <img
                                                src={item?.image || "/assets/images/1-web.jpg"}
                                                alt={item?.title}
                                            />
                                        </div>
                                        <div className="insight-content">
                                           <div dangerouslySetInnerHTML={{ __html: item?.details }} />
                                        </div>
                                    </li>
                                ) ) }

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Insights;
