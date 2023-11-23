

<div class="create-coupon-area disable">
    <div class="create-coupon-modal">
        <div class="coupon-modal__heading">
            <h2>Thêm khuyến mãi</h2>
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
                            <input type="checkbox" name="male-all" id="male-all-checkbox--create" />
                            <label for="male-all-checkbox--create">
                                Tất cả sản phẩm nam
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="male-shoe" id="male-shoe-checkbox--create" />
                            <label for="male-shoe-checkbox--create">
                                Giày nam
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="male-shirt" id="male-shirt-checkbox--create" />
                            <label for="male-shirt-checkbox--create">
                                Áo nam
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="male-pants" id="male-pants-checkbox--create" />
                            <label for="male-pants-checkbox--create">
                                Quần nam
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="male-socks" id="male-socks-checkbox--create" />
                            <label for="male-socks-checkbox--create">
                                Tất nam
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="male-hat" id="male-hat-checkbox--create" />
                            <label for="male-hat-checkbox--create">
                                Mũ nam
                            </label>
                        </div>
                    </div>
                    <!-- Checkbox column -->
                    <div class="coupon-modal__checkbox-column">
                        <!-- Checkbox cell -->
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="female-all" id="female-all-checkbox--create" />
                            <label for="female-all-checkbox--create">
                                Tất cả sản phẩm nữ
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="female-shoe" id="female-shoe-checkbox--create" />
                            <label for="female-shoe-checkbox--create">
                                Giày nữ
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="female-shirt" id="female-shirt-checkbox--create" />
                            <label for="female-shirt-checkbox--create">
                                Áo nữ
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="female-pants" id="female-pants-checkbox--create" />
                            <label for="female-pants-checkbox--create">
                                Quần nữ
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="female-socks" id="female-socks-checkbox--create" />
                            <label for="female-socks-checkbox--create">
                                Tất nữ
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="female-hat" id="female-hat-checkbox--create" />
                            <label for="female-hat-checkbox--create">
                                Mũ nữ
                            </label>
                        </div>
                    </div>
                    <!-- Checkbox column -->
                    <div class="coupon-modal__checkbox-column">
                        <!-- Checkbox cell -->
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="child-all" id="child-all-checkbox--create" />
                            <label for="child-all-checkbox--create">
                                Tất cả sản phẩm trẻ em
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="child-shoe" id="child-shoe-checkbox--create" />
                            <label for="child-shoe-checkbox--create">
                                Giày trẻ em
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="child-shirt" id="child-shirt-checkbox--create" />
                            <label for="child-shirt-checkbox--create">
                                Áo trẻ em
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="child-pants" id="child-pants-checkbox--create" />
                            <label for="child-pants-checkbox--create">
                                Quần trẻ em
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="child-socks" id="child-socks-checkbox--create" />
                            <label for="child-socks-checkbox--create">
                                Tất trẻ em
                            </label>
                        </div>
                        <div class="coupon-modal__checkbox-cell">
                            <input type="checkbox" name="child-hat" id="child-hat-checkbox--create" />
                            <label for="child-hat-checkbox--create">
                                Mũ trẻ em
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="coupon-modal__foot">
            <button class="coupon-modal__accept-btn" id="create-accept-btn">
                Thêm
            </button>
            <button class="coupon-modal__cancel-btn" id="create-cancel-btn">
                Thoát
            </button>
        </div>
    </div>
</div>