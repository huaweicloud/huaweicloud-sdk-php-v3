<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRefererChainResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRefererChainResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  直播域名
    * guardSwitch  referer防盗链开关：true表示开启；false表示关闭
    * refererConfigEmpty  是否包含referer头域：true表示包含；false表示不包含；guard_switch为true则必填
    * refererWhiteList  是否为referer白名单：true表示白名单；false表示黑名单；guard_switch为true则必填
    * refererAuthList  域名列表，域名为正则表达式；最多支持配置100个域名，以英文“;”进行分隔；guard_switch为true则必填
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'guardSwitch' => 'string',
            'refererConfigEmpty' => 'string',
            'refererWhiteList' => 'string',
            'refererAuthList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  直播域名
    * guardSwitch  referer防盗链开关：true表示开启；false表示关闭
    * refererConfigEmpty  是否包含referer头域：true表示包含；false表示不包含；guard_switch为true则必填
    * refererWhiteList  是否为referer白名单：true表示白名单；false表示黑名单；guard_switch为true则必填
    * refererAuthList  域名列表，域名为正则表达式；最多支持配置100个域名，以英文“;”进行分隔；guard_switch为true则必填
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'guardSwitch' => null,
        'refererConfigEmpty' => null,
        'refererWhiteList' => null,
        'refererAuthList' => null
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
    * domain  直播域名
    * guardSwitch  referer防盗链开关：true表示开启；false表示关闭
    * refererConfigEmpty  是否包含referer头域：true表示包含；false表示不包含；guard_switch为true则必填
    * refererWhiteList  是否为referer白名单：true表示白名单；false表示黑名单；guard_switch为true则必填
    * refererAuthList  域名列表，域名为正则表达式；最多支持配置100个域名，以英文“;”进行分隔；guard_switch为true则必填
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'guardSwitch' => 'guard_switch',
            'refererConfigEmpty' => 'referer_config_empty',
            'refererWhiteList' => 'referer_white_list',
            'refererAuthList' => 'referer_auth_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  直播域名
    * guardSwitch  referer防盗链开关：true表示开启；false表示关闭
    * refererConfigEmpty  是否包含referer头域：true表示包含；false表示不包含；guard_switch为true则必填
    * refererWhiteList  是否为referer白名单：true表示白名单；false表示黑名单；guard_switch为true则必填
    * refererAuthList  域名列表，域名为正则表达式；最多支持配置100个域名，以英文“;”进行分隔；guard_switch为true则必填
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'guardSwitch' => 'setGuardSwitch',
            'refererConfigEmpty' => 'setRefererConfigEmpty',
            'refererWhiteList' => 'setRefererWhiteList',
            'refererAuthList' => 'setRefererAuthList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  直播域名
    * guardSwitch  referer防盗链开关：true表示开启；false表示关闭
    * refererConfigEmpty  是否包含referer头域：true表示包含；false表示不包含；guard_switch为true则必填
    * refererWhiteList  是否为referer白名单：true表示白名单；false表示黑名单；guard_switch为true则必填
    * refererAuthList  域名列表，域名为正则表达式；最多支持配置100个域名，以英文“;”进行分隔；guard_switch为true则必填
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'guardSwitch' => 'getGuardSwitch',
            'refererConfigEmpty' => 'getRefererConfigEmpty',
            'refererWhiteList' => 'getRefererWhiteList',
            'refererAuthList' => 'getRefererAuthList'
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
    const GUARD_SWITCH_TRUE = 'true';
    const GUARD_SWITCH_FALSE = 'false';
    const REFERER_CONFIG_EMPTY_TRUE = 'true';
    const REFERER_CONFIG_EMPTY_FALSE = 'false';
    const REFERER_WHITE_LIST_TRUE = 'true';
    const REFERER_WHITE_LIST_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGuardSwitchAllowableValues()
    {
        return [
            self::GUARD_SWITCH_TRUE,
            self::GUARD_SWITCH_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRefererConfigEmptyAllowableValues()
    {
        return [
            self::REFERER_CONFIG_EMPTY_TRUE,
            self::REFERER_CONFIG_EMPTY_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRefererWhiteListAllowableValues()
    {
        return [
            self::REFERER_WHITE_LIST_TRUE,
            self::REFERER_WHITE_LIST_FALSE,
        ];
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['guardSwitch'] = isset($data['guardSwitch']) ? $data['guardSwitch'] : null;
        $this->container['refererConfigEmpty'] = isset($data['refererConfigEmpty']) ? $data['refererConfigEmpty'] : null;
        $this->container['refererWhiteList'] = isset($data['refererWhiteList']) ? $data['refererWhiteList'] : null;
        $this->container['refererAuthList'] = isset($data['refererAuthList']) ? $data['refererAuthList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getGuardSwitchAllowableValues();
                if (!is_null($this->container['guardSwitch']) && !in_array($this->container['guardSwitch'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'guardSwitch', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRefererConfigEmptyAllowableValues();
                if (!is_null($this->container['refererConfigEmpty']) && !in_array($this->container['refererConfigEmpty'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'refererConfigEmpty', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRefererWhiteListAllowableValues();
                if (!is_null($this->container['refererWhiteList']) && !in_array($this->container['refererWhiteList'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'refererWhiteList', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets domain
    *  直播域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 直播域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets guardSwitch
    *  referer防盗链开关：true表示开启；false表示关闭
    *
    * @return string|null
    */
    public function getGuardSwitch()
    {
        return $this->container['guardSwitch'];
    }

    /**
    * Sets guardSwitch
    *
    * @param string|null $guardSwitch referer防盗链开关：true表示开启；false表示关闭
    *
    * @return $this
    */
    public function setGuardSwitch($guardSwitch)
    {
        $this->container['guardSwitch'] = $guardSwitch;
        return $this;
    }

    /**
    * Gets refererConfigEmpty
    *  是否包含referer头域：true表示包含；false表示不包含；guard_switch为true则必填
    *
    * @return string|null
    */
    public function getRefererConfigEmpty()
    {
        return $this->container['refererConfigEmpty'];
    }

    /**
    * Sets refererConfigEmpty
    *
    * @param string|null $refererConfigEmpty 是否包含referer头域：true表示包含；false表示不包含；guard_switch为true则必填
    *
    * @return $this
    */
    public function setRefererConfigEmpty($refererConfigEmpty)
    {
        $this->container['refererConfigEmpty'] = $refererConfigEmpty;
        return $this;
    }

    /**
    * Gets refererWhiteList
    *  是否为referer白名单：true表示白名单；false表示黑名单；guard_switch为true则必填
    *
    * @return string|null
    */
    public function getRefererWhiteList()
    {
        return $this->container['refererWhiteList'];
    }

    /**
    * Sets refererWhiteList
    *
    * @param string|null $refererWhiteList 是否为referer白名单：true表示白名单；false表示黑名单；guard_switch为true则必填
    *
    * @return $this
    */
    public function setRefererWhiteList($refererWhiteList)
    {
        $this->container['refererWhiteList'] = $refererWhiteList;
        return $this;
    }

    /**
    * Gets refererAuthList
    *  域名列表，域名为正则表达式；最多支持配置100个域名，以英文“;”进行分隔；guard_switch为true则必填
    *
    * @return string[]|null
    */
    public function getRefererAuthList()
    {
        return $this->container['refererAuthList'];
    }

    /**
    * Sets refererAuthList
    *
    * @param string[]|null $refererAuthList 域名列表，域名为正则表达式；最多支持配置100个域名，以英文“;”进行分隔；guard_switch为true则必填
    *
    * @return $this
    */
    public function setRefererAuthList($refererAuthList)
    {
        $this->container['refererAuthList'] = $refererAuthList;
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

