<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubscriptionOrderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubscriptionOrderRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  用户当前语言环境
    * offset  smn订阅偏移量
    * limit  smn订阅返回数量
    * page  订单资源详情信息枚举，DEFAULT:默认缺省值，获取开通的资源列表，不包含套餐包；PURCHASE：在DEFAULT基础上返回租户名下ECS数量；RESOURCE_LIST在DEFAULT基础上返回套餐包列表；USAGE：返回资源用量信息；SMN：返回已订阅的smn topic列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'page' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  用户当前语言环境
    * offset  smn订阅偏移量
    * limit  smn订阅返回数量
    * page  订单资源详情信息枚举，DEFAULT:默认缺省值，获取开通的资源列表，不包含套餐包；PURCHASE：在DEFAULT基础上返回租户名下ECS数量；RESOURCE_LIST在DEFAULT基础上返回套餐包列表；USAGE：返回资源用量信息；SMN：返回已订阅的smn topic列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'offset' => null,
        'limit' => null,
        'page' => null
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
    * xLanguage  用户当前语言环境
    * offset  smn订阅偏移量
    * limit  smn订阅返回数量
    * page  订单资源详情信息枚举，DEFAULT:默认缺省值，获取开通的资源列表，不包含套餐包；PURCHASE：在DEFAULT基础上返回租户名下ECS数量；RESOURCE_LIST在DEFAULT基础上返回套餐包列表；USAGE：返回资源用量信息；SMN：返回已订阅的smn topic列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'offset' => 'offset',
            'limit' => 'limit',
            'page' => 'page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  用户当前语言环境
    * offset  smn订阅偏移量
    * limit  smn订阅返回数量
    * page  订单资源详情信息枚举，DEFAULT:默认缺省值，获取开通的资源列表，不包含套餐包；PURCHASE：在DEFAULT基础上返回租户名下ECS数量；RESOURCE_LIST在DEFAULT基础上返回套餐包列表；USAGE：返回资源用量信息；SMN：返回已订阅的smn topic列表
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'page' => 'setPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  用户当前语言环境
    * offset  smn订阅偏移量
    * limit  smn订阅返回数量
    * page  订单资源详情信息枚举，DEFAULT:默认缺省值，获取开通的资源列表，不包含套餐包；PURCHASE：在DEFAULT基础上返回租户名下ECS数量；RESOURCE_LIST在DEFAULT基础上返回套餐包列表；USAGE：返回资源用量信息；SMN：返回已订阅的smn topic列表
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'page' => 'getPage'
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
    const PAGE__DEFAULT = 'DEFAULT';
    const PAGE_PURCHASE = 'PURCHASE';
    const PAGE_SMN = 'SMN';
    const PAGE_USAGE = 'USAGE';
    const PAGE_RESOURCE_LIST = 'RESOURCE_LIST';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPageAllowableValues()
    {
        return [
            self::PAGE__DEFAULT,
            self::PAGE_PURCHASE,
            self::PAGE_SMN,
            self::PAGE_USAGE,
            self::PAGE_RESOURCE_LIST,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['xLanguage'] === null) {
            $invalidProperties[] = "'xLanguage' can't be null";
        }
            if ((mb_strlen($this->container['xLanguage']) > 6)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be smaller than or equal to 6.";
            }
            if ((mb_strlen($this->container['xLanguage']) < 2)) {
                $invalidProperties[] = "invalid value for 'xLanguage', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getPageAllowableValues();
                if (!is_null($this->container['page']) && !in_array($this->container['page'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'page', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['page']) && (mb_strlen($this->container['page']) > 20)) {
                $invalidProperties[] = "invalid value for 'page', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['page']) && (mb_strlen($this->container['page']) < 3)) {
                $invalidProperties[] = "invalid value for 'page', the character length must be bigger than or equal to 3.";
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
    * Gets xLanguage
    *  用户当前语言环境
    *
    * @return string
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string $xLanguage 用户当前语言环境
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets offset
    *  smn订阅偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset smn订阅偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  smn订阅返回数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit smn订阅返回数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets page
    *  订单资源详情信息枚举，DEFAULT:默认缺省值，获取开通的资源列表，不包含套餐包；PURCHASE：在DEFAULT基础上返回租户名下ECS数量；RESOURCE_LIST在DEFAULT基础上返回套餐包列表；USAGE：返回资源用量信息；SMN：返回已订阅的smn topic列表
    *
    * @return string|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param string|null $page 订单资源详情信息枚举，DEFAULT:默认缺省值，获取开通的资源列表，不包含套餐包；PURCHASE：在DEFAULT基础上返回租户名下ECS数量；RESOURCE_LIST在DEFAULT基础上返回套餐包列表；USAGE：返回资源用量信息；SMN：返回已订阅的smn topic列表
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
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

