<main data-barba="container" data-barba-namespace="reports">
    <div class="main-inside">
        <div class="reports">
            <div class="cover">
                <img src="assets/img/Insurance_-Agent-_Service_VectorForFree-%201.png" alt="" title="" class="cover-img-1"/>
                <img src="assets/img/Group_43.png" alt="" class="cover-img-2"/>
                <div class="cover-info">
                    <div class="cover-title">
                        <p>
                            20% Safe On Your First Account
                        </p>
                    </div>
                    <div class="flex-container align-middle align-center code-wrapper">
                        <div class="code">
                            NEWBIE20
                        </div>
                        <div class="copy-code">
                            Copy Code
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-list">
                <?php
                for ($i = 1; $i <= 3; $i++) {
                    ?>
                    <div class="card">
                        <div class="price">
                            1000
                            <sup>
                                $
                            </sup>
                        </div>
                        <div class="card-text">
                            <p>
                                Total Value of Disbursement
                            </p>
                        </div>
                        <div class="progress-wrapper">
                            <div class="flex-container align-middle align-justify progress-info">
                                <div>
                                    Policy
                                </div>
                                <div>
                                    400$
                                </div>
                            </div>
                            <div class="progress progress-green">
                                <div style="width: 40%"></div>
                            </div>
                        </div>
                        <div class="progress-wrapper">
                            <div class="flex-container align-middle align-justify progress-info">
                                <div>
                                    Claim
                                </div>
                                <div>
                                    800$
                                </div>
                            </div>
                            <div class="progress progress-purple">
                                <div style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</main>