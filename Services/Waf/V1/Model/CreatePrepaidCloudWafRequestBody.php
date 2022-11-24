<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePrepaidCloudWafRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePrepaidCloudWafRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id
    * isAutoPay  是否自动支付    - false: 否（需要客户手动去支付）   - true：是（自动支付）
    * isAutoRenew  是否自动续订   -  true：自动续订   - false：不自动续订
    * regionId  region Id
    * wafProductInfo  wafProductInfo
    * domainExpackProductInfo  domainExpackProductInfo
    * bandwidthExpackProductInfo  bandwidthExpackProductInfo
    * ruleExpackProductInfo  ruleExpackProductInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'isAutoPay' => 'bool',
            'isAutoRenew' => 'bool',
            'regionId' => 'string',
            'wafProductInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\WafProductInfo',
            'domainExpackProductInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\ExpackProductInfo',
            'bandwidthExpackProductInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\ExpackProductInfo',
            'ruleExpackProductInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\ExpackProductInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id
    * isAutoPay  是否自动支付    - false: 否（需要客户手动去支付）   - true：是（自动支付）
    * isAutoRenew  是否自动续订   -  true：自动续订   - false：不自动续订
    * regionId  region Id
    * wafProductInfo  wafProductInfo
    * domainExpackProductInfo  domainExpackProductInfo
    * bandwidthExpackProductInfo  bandwidthExpackProductInfo
    * ruleExpackProductInfo  ruleExpackProductInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'isAutoPay' => null,
        'isAutoRenew' => null,
        'regionId' => null,
        'wafProductInfo' => null,
        'domainExpackProductInfo' => null,
        'bandwidthExpackProductInfo' => null,
        'ruleExpackProductInfo' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * projectId  项目id
    * isAutoPay  是否自动支付    - false: 否（需要客户手动去支付）   - true：是（自动支付）
    * isAutoRenew  是否自动续订   -  true：自动续订   - false：不自动续订
    * regionId  region Id
    * wafProductInfo  wafProductInfo
    * domainExpackProductInfo  domainExpackProductInfo
    * bandwidthExpackProductInfo  bandwidthExpackProductInfo
    * ruleExpackProductInfo  ruleExpackProductInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'isAutoPay' => 'is_auto_pay',
            'isAutoRenew' => 'is_auto_renew',
            'regionId' => 'region_id',
            'wafProductInfo' => 'waf_product_info',
            'domainExpackProductInfo' => 'domain_expack_product_info',
            'bandwidthExpackProductInfo' => 'bandwidth_expack_product_info',
            'ruleExpackProductInfo' => 'rule_expack_product_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id
    * isAutoPay  是否自动支付    - false: 否（需要客户手动去支付）   - true：是（自动支付）
    * isAutoRenew  是否自动续订   -  true：自动续订   - false：不自动续订
    * regionId  region Id
    * wafProductInfo  wafProductInfo
    * domainExpackProductInfo  domainExpackProductInfo
    * bandwidthExpackProductInfo  bandwidthExpackProductInfo
    * ruleExpackProductInfo  ruleExpackProductInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'isAutoPay' => 'setIsAutoPay',
            'isAutoRenew' => 'setIsAutoRenew',
            'regionId' => 'setRegionId',
            'wafProductInfo' => 'setWafProductInfo',
            'domainExpackProductInfo' => 'setDomainExpackProductInfo',
            'bandwidthExpackProductInfo' => 'setBandwidthExpackProductInfo',
            'ruleExpackProductInfo' => 'setRuleExpackProductInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id
    * isAutoPay  是否自动支付    - false: 否（需要客户手动去支付）   - true：是（自动支付）
    * isAutoRenew  是否自动续订   -  true：自动续订   - false：不自动续订
    * regionId  region Id
    * wafProductInfo  wafProductInfo
    * domainExpackProductInfo  domainExpackProductInfo
    * bandwidthExpackProductInfo  bandwidthExpackProductInfo
    * ruleExpackProductInfo  ruleExpackProductInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'isAutoPay' => 'getIsAutoPay',
            'isAutoRenew' => 'getIsAutoRenew',
            'regionId' => 'getRegionId',
            'wafProductInfo' => 'getWafProductInfo',
            'domainExpackProductInfo' => 'getDomainExpackProductInfo',
            'bandwidthExpackProductInfo' => 'getBandwidthExpackProductInfo',
            'ruleExpackProductInfo' => 'getRuleExpackProductInfo'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['wafProductInfo'] = isset($data['wafProductInfo']) ? $data['wafProductInfo'] : null;
        $this->container['domainExpackProductInfo'] = isset($data['domainExpackProductInfo']) ? $data['domainExpackProductInfo'] : null;
        $this->container['bandwidthExpackProductInfo'] = isset($data['bandwidthExpackProductInfo']) ? $data['bandwidthExpackProductInfo'] : null;
        $this->container['ruleExpackProductInfo'] = isset($data['ruleExpackProductInfo']) ? $data['ruleExpackProductInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['isAutoPay'] === null) {
            $invalidProperties[] = "'isAutoPay' can't be null";
        }
        if ($this->container['isAutoRenew'] === null) {
            $invalidProperties[] = "'isAutoRenew' can't be null";
        }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否自动支付    - false: 否（需要客户手动去支付）   - true：是（自动支付）
    *
    * @return bool
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool $isAutoPay 是否自动支付    - false: 否（需要客户手动去支付）   - true：是（自动支付）
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  是否自动续订   -  true：自动续订   - false：不自动续订
    *
    * @return bool
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param bool $isAutoRenew 是否自动续订   -  true：自动续订   - false：不自动续订
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets regionId
    *  region Id
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId region Id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets wafProductInfo
    *  wafProductInfo
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\WafProductInfo|null
    */
    public function getWafProductInfo()
    {
        return $this->container['wafProductInfo'];
    }

    /**
    * Sets wafProductInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\WafProductInfo|null $wafProductInfo wafProductInfo
    *
    * @return $this
    */
    public function setWafProductInfo($wafProductInfo)
    {
        $this->container['wafProductInfo'] = $wafProductInfo;
        return $this;
    }

    /**
    * Gets domainExpackProductInfo
    *  domainExpackProductInfo
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\ExpackProductInfo|null
    */
    public function getDomainExpackProductInfo()
    {
        return $this->container['domainExpackProductInfo'];
    }

    /**
    * Sets domainExpackProductInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\ExpackProductInfo|null $domainExpackProductInfo domainExpackProductInfo
    *
    * @return $this
    */
    public function setDomainExpackProductInfo($domainExpackProductInfo)
    {
        $this->container['domainExpackProductInfo'] = $domainExpackProductInfo;
        return $this;
    }

    /**
    * Gets bandwidthExpackProductInfo
    *  bandwidthExpackProductInfo
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\ExpackProductInfo|null
    */
    public function getBandwidthExpackProductInfo()
    {
        return $this->container['bandwidthExpackProductInfo'];
    }

    /**
    * Sets bandwidthExpackProductInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\ExpackProductInfo|null $bandwidthExpackProductInfo bandwidthExpackProductInfo
    *
    * @return $this
    */
    public function setBandwidthExpackProductInfo($bandwidthExpackProductInfo)
    {
        $this->container['bandwidthExpackProductInfo'] = $bandwidthExpackProductInfo;
        return $this;
    }

    /**
    * Gets ruleExpackProductInfo
    *  ruleExpackProductInfo
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\ExpackProductInfo|null
    */
    public function getRuleExpackProductInfo()
    {
        return $this->container['ruleExpackProductInfo'];
    }

    /**
    * Sets ruleExpackProductInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\ExpackProductInfo|null $ruleExpackProductInfo ruleExpackProductInfo
    *
    * @return $this
    */
    public function setRuleExpackProductInfo($ruleExpackProductInfo)
    {
        $this->container['ruleExpackProductInfo'] = $ruleExpackProductInfo;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

