<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/keyword_plan_service.proto

namespace Google\Ads\GoogleAds\V6\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The forecast curve for the campaign.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.services.KeywordPlanCampaignForecastCurve</code>
 */
class KeywordPlanCampaignForecastCurve extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the Keyword Plan campaign related to the forecast.
     * `customers/{customer_id}/keywordPlanCampaigns/{keyword_plan_campaign_id}`
     *
     * Generated from protobuf field <code>string keyword_plan_campaign = 3;</code>
     */
    protected $keyword_plan_campaign = null;
    /**
     * The max cpc bid forecast curve for the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.KeywordPlanMaxCpcBidForecastCurve max_cpc_bid_forecast_curve = 2;</code>
     */
    protected $max_cpc_bid_forecast_curve = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $keyword_plan_campaign
     *           The resource name of the Keyword Plan campaign related to the forecast.
     *           `customers/{customer_id}/keywordPlanCampaigns/{keyword_plan_campaign_id}`
     *     @type \Google\Ads\GoogleAds\V6\Services\KeywordPlanMaxCpcBidForecastCurve $max_cpc_bid_forecast_curve
     *           The max cpc bid forecast curve for the campaign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Services\KeywordPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the Keyword Plan campaign related to the forecast.
     * `customers/{customer_id}/keywordPlanCampaigns/{keyword_plan_campaign_id}`
     *
     * Generated from protobuf field <code>string keyword_plan_campaign = 3;</code>
     * @return string
     */
    public function getKeywordPlanCampaign()
    {
        return isset($this->keyword_plan_campaign) ? $this->keyword_plan_campaign : '';
    }

    public function hasKeywordPlanCampaign()
    {
        return isset($this->keyword_plan_campaign);
    }

    public function clearKeywordPlanCampaign()
    {
        unset($this->keyword_plan_campaign);
    }

    /**
     * The resource name of the Keyword Plan campaign related to the forecast.
     * `customers/{customer_id}/keywordPlanCampaigns/{keyword_plan_campaign_id}`
     *
     * Generated from protobuf field <code>string keyword_plan_campaign = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKeywordPlanCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword_plan_campaign = $var;

        return $this;
    }

    /**
     * The max cpc bid forecast curve for the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.KeywordPlanMaxCpcBidForecastCurve max_cpc_bid_forecast_curve = 2;</code>
     * @return \Google\Ads\GoogleAds\V6\Services\KeywordPlanMaxCpcBidForecastCurve
     */
    public function getMaxCpcBidForecastCurve()
    {
        return isset($this->max_cpc_bid_forecast_curve) ? $this->max_cpc_bid_forecast_curve : null;
    }

    public function hasMaxCpcBidForecastCurve()
    {
        return isset($this->max_cpc_bid_forecast_curve);
    }

    public function clearMaxCpcBidForecastCurve()
    {
        unset($this->max_cpc_bid_forecast_curve);
    }

    /**
     * The max cpc bid forecast curve for the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.KeywordPlanMaxCpcBidForecastCurve max_cpc_bid_forecast_curve = 2;</code>
     * @param \Google\Ads\GoogleAds\V6\Services\KeywordPlanMaxCpcBidForecastCurve $var
     * @return $this
     */
    public function setMaxCpcBidForecastCurve($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Services\KeywordPlanMaxCpcBidForecastCurve::class);
        $this->max_cpc_bid_forecast_curve = $var;

        return $this;
    }

}

