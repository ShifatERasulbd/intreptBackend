import React, { useEffect, useState } from "react";
import axios from 'axios';

const Insights = () => {
   const [insights, setInsights] = useState([]);

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
        <div>
            <div className="insight-sections">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-12">
                            <div className="section-title">
                                <h2>Latest Insights</h2>
                            </div>
                            <ul className="insight-wrap">
                                { insights?.length > 0 && insights.map( (item) => (
                                    <li className="single-insight">
                                        <div className="insight-title-wrap">
                                            <h6>
                                                <span> Exhibitions </span>
                                            </h6>
                                            <h3>{ item?.title }</h3>
                                        </div>
                                        <div className="insight-image">
                                            <img
                                                src="/assets/images/1-web.jpg"
                                                alt=""
                                            />
                                        </div>
                                        <div className="insight-content">
                                            <p>
                                                The Sámi have long desired for a
                                                public process and an engagement to
                                                examine and expose the Nordic
                                                states’ colonial, assimilationist
                                                policies toward the Sámi people. (1)
                                            </p>
                                            <p>
                                                In 2018 Norway established “The
                                                commission to investigate the
                                                Norwegianisation policy and
                                                injustice against the Sámi and
                                                Kven/Norwegian Finnish peoples”. In
                                                2021, both Finland and Sweden moved
                                                forward on truth and reconciliation
                                                commissions of their own to document
                                                historical violations and their
                                                contemporary consequences on the
                                                Sámi. Yet public knowledge about the
                                                truth commissions in Norway, Finland
                                                and Sweden are lacking.
                                            </p>
                                            <p>
                                                Critics of the commissions doubt the
                                                intention of Nordic governments for
                                                reconciliation when current policies
                                                continue to violate rights, for
                                                example by promoting both extractive
                                                projects and “green colonialism” in
                                                the form of harmful sustainability
                                                projects which could destroy
                                                traditional ways of life already
                                                under threat from the climate
                                                emergency.
                                            </p>
                                            <p>
                                                Just consider the February 2023
                                                protests in Oslo, where young Sámi
                                                protesters had to barricade
                                                government buildings to get the
                                                Norwegian state to listen to their
                                                demands for the enforcement of a
                                                Supreme Court ruling 500 days after
                                                they found the construction of
                                                industrial wind farms in Fosen
                                                illegal.
                                            </p>
                                            <p>
                                                How can past injustices be
                                                reconciled within the ongoing
                                                structures of colonialism? To
                                                address this question, we
                                                interviewed and met with Sámi
                                                activists, archeologists,
                                                historians, journalists, and
                                                researchers and examined
                                                cartographic evidence, photographs
                                                and other archival sources.
                                            </p>
                                            <p>
                                                It is while working on the research
                                                for this project that we became part
                                                of a legal action between Sámi
                                                herders of the Jillen-Njaarke
                                                reindeer herding district and
                                                Øyfjellet wind farm in Norway. We
                                                conducted a series of participatory
                                                workshops with herders and collected
                                                environmental data combined with the
                                                herders’ own videos, to create a 3D
                                                environment of the disputed site,
                                                towards counter-mapping the colonial
                                                present in Sápmi.
                                            </p>
                                            <p>
                                                (1) Rauna Kuokkanen in Human Rights
                                                Review (2020)
                                            </p>
                                            <div className="team-block-in-ap">
                                                {/* <div class="team-title-ap">[ INFO ]</div> */}
                                                <div className="team-list-ap article-info-idp">
                                                    <div className="media-coverage-item-ap">
                                                        <div className="m-coverage-title-ap">
                                                            DATE
                                                        </div>
                                                        <div className="m-coverage-info-ap">
                                                            2023
                                                        </div>
                                                    </div>
                                                    <div className="media-coverage-item-ap">
                                                        <div className="m-coverage-title-ap">
                                                            VENUE
                                                        </div>
                                                        <div className="m-coverage-info-ap">
                                                            Helsinki Biennial
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <style
                                                dangerouslySetInnerHTML={{
                                                    __html: "\n                  \n                  .media-coverage-item-ap{\n                      border-bottom: 1px solid #ddd;\n                  }\n                  .media-coverage-item-ap .m-coverage-title-ap{\n                      font-weight: 600;\n                      width: 200px;\n                      display: inline-block;\n                      padding: 7px 0;\n                  }\n                  .media-coverage-item-ap .m-coverage-info-ap{\n                      display: inline-block;\n                  }\n              ",
                                                }}
                                            />
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
