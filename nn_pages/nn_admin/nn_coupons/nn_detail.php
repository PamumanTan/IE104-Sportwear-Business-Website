

<div class="detail-coupon-area disable">
    <div class="detail-coupon-modal">
        <div class="coupon-modal__heading">
            <h2>Chi tiết khuyến mãi</h2>
        </div>

        <div class="coupon-modal__body">
            <div class="coupon-modal__main">
                <div class="coupon-modal__percent">
                    <label for="percent-coupon">
                        % khuyến mãi
                    </label>
                    <input type="range" name="percent-range" id="percent-range" />
                    <input type="text" id="percent-coupon" placeholder="30%"/>
                </div>
                <div class="coupon-modal__date">
                    <label for="date-start-detail">
                        Ngày áp dụng
                    </label>
                    <div class="coupon-modal__date-input">
                        <input type="text" name="date-start" id="date-start-detail" 
                            placeholder="01/09/2022"
                        />
                        <div class="hyphen"></div>
                        <input type="text" name="date-end" id="date-end-detail" 
                            placeholder="30/09/2022"
                        />
                    </div>
                </div>
            </div>

            <div class="coupon-modal__types">
                <p>Loại sản phẩm áp dụng</p>
                <!-- Checkbox container -->
                <div class="coupon-modal__checkbox-container">
                    <!-- Checkbox column -->
                    <div class="coupon-modal__checkbox-column">
                        <!-- Checkbox cell -->
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="male-all" id="male-all-checkbox" />
                            <label for="male-all-checkbox">
                                Tất cả sản phẩm nam
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="male-shoe" id="male-shoe-checkbox" />
                            <label for="male-shoe-checkbox">
                                Giày nam
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="male-shirt" id="male-shirt-checkbox" />
                            <label for="male-shirt-checkbox">
                                Áo nam
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="male-pants" id="male-pants-checkbox" />
                            <label for="male-pants-checkbox">
                                Quần nam
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="male-socks" id="male-socks-checkbox" />
                            <label for="male-socks-checkbox">
                                Tất nam
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="male-hat" id="male-hat-checkbox" />
                            <label for="male-hat-checkbox">
                                Mũ nam
                            </label>
                        </div>
                    </div>
                    <!-- Checkbox column -->
                    <div class="coupon-modal__checkbox-column">
                        <!-- Checkbox cell -->
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="female-all" id="female-all-checkbox" />
                            <label for="female-all-checkbox">
                                Tất cả sản phẩm nữ
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="female-shoe" id="female-shoe-checkbox" />
                            <label for="female-shoe-checkbox">
                                Giày nữ
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="female-shirt" id="female-shirt-checkbox" />
                            <label for="female-shirt-checkbox">
                                Áo nữ
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="female-pants" id="female-pants-checkbox" />
                            <label for="female-pants-checkbox">
                                Quần nữ
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="female-socks" id="female-socks-checkbox" />
                            <label for="female-socks-checkbox">
                                Tất nữ
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="female-hat" id="female-hat-checkbox" />
                            <label for="female-hat-checkbox">
                                Mũ nữ
                            </label>
                        </div>
                    </div>
                    <!-- Checkbox column -->
                    <div class="coupon-modal__checkbox-column">
                        <!-- Checkbox cell -->
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="child-all" id="child-all-checkbox" />
                            <label for="child-all-checkbox">
                                Tất cả sản phẩm trẻ em
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="child-shoe" id="child-shoe-checkbox" />
                            <label for="child-shoe-checkbox">
                                Giày trẻ em
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="child-shirt" id="child-shirt-checkbox" />
                            <label for="child-shirt-checkbox">
                                Áo trẻ em
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="child-pants" id="child-pants-checkbox" />
                            <label for="child-pants-checkbox">
                                Quần trẻ em
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="child-socks" id="child-socks-checkbox" />
                            <label for="child-socks-checkbox">
                                Tất trẻ em
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="child-hat" id="child-hat-checkbox" />
                            <label for="child-hat-checkbox">
                                Mũ trẻ em
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="coupon-modal__foot">
            <button class="coupon-modal__accept-btn" id="detail-accept-btn">
                Sửa
            </button>
            <button class="coupon-modal__cancel-btn" id="detail-cancel-btn">
                Thoát
            </button>
        </div>
    </div>
</div>