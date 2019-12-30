<?php

namespace MageSuite\GuestWishlist\Helper;

class Configuration
{
    const GUEST_WISHLIST_COOKIE_LIFETIME_XML_PATH = 'guest_wishlist/general/cookie_lifetime';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function getGuestWishlistCookieLifetime()
    {
        return $this->scopeConfig->getValue(self::GUEST_WISHLIST_COOKIE_LIFETIME_XML_PATH);
    }
}
