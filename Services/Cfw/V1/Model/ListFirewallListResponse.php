<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFirewallListResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFirewallListResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userSupportEps  是否支持企业项目，true表示是，false表示不是
    * hasNdr  是否存在ndr，true表示是，false表示不是，NDR为原旁路版防火墙，现已停止售卖。
    * isSupportPostpaid  是否支持按需购买，true表示是，false表示不是
    * isSupportBasicVersion  是否支持基础版，true表示是，false表示不是
    * isSupportBuyProfessional  是否支持购买专业版，true表示是，false表示不是
    * data  data
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userSupportEps' => 'bool',
            'hasNdr' => 'bool',
            'isSupportPostpaid' => 'bool',
            'isSupportBasicVersion' => 'bool',
            'isSupportBuyProfessional' => 'bool',
            'data' => '\HuaweiCloud\SDK\Cfw\V1\Model\HttpFirewallInstanceListResponseData'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userSupportEps  是否支持企业项目，true表示是，false表示不是
    * hasNdr  是否存在ndr，true表示是，false表示不是，NDR为原旁路版防火墙，现已停止售卖。
    * isSupportPostpaid  是否支持按需购买，true表示是，false表示不是
    * isSupportBasicVersion  是否支持基础版，true表示是，false表示不是
    * isSupportBuyProfessional  是否支持购买专业版，true表示是，false表示不是
    * data  data
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userSupportEps' => null,
        'hasNdr' => null,
        'isSupportPostpaid' => null,
        'isSupportBasicVersion' => null,
        'isSupportBuyProfessional' => null,
        'data' => null
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
    * userSupportEps  是否支持企业项目，true表示是，false表示不是
    * hasNdr  是否存在ndr，true表示是，false表示不是，NDR为原旁路版防火墙，现已停止售卖。
    * isSupportPostpaid  是否支持按需购买，true表示是，false表示不是
    * isSupportBasicVersion  是否支持基础版，true表示是，false表示不是
    * isSupportBuyProfessional  是否支持购买专业版，true表示是，false表示不是
    * data  data
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userSupportEps' => 'user_support_eps',
            'hasNdr' => 'has_ndr',
            'isSupportPostpaid' => 'is_support_postpaid',
            'isSupportBasicVersion' => 'is_support_basic_version',
            'isSupportBuyProfessional' => 'is_support_buy_professional',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userSupportEps  是否支持企业项目，true表示是，false表示不是
    * hasNdr  是否存在ndr，true表示是，false表示不是，NDR为原旁路版防火墙，现已停止售卖。
    * isSupportPostpaid  是否支持按需购买，true表示是，false表示不是
    * isSupportBasicVersion  是否支持基础版，true表示是，false表示不是
    * isSupportBuyProfessional  是否支持购买专业版，true表示是，false表示不是
    * data  data
    *
    * @var string[]
    */
    protected static $setters = [
            'userSupportEps' => 'setUserSupportEps',
            'hasNdr' => 'setHasNdr',
            'isSupportPostpaid' => 'setIsSupportPostpaid',
            'isSupportBasicVersion' => 'setIsSupportBasicVersion',
            'isSupportBuyProfessional' => 'setIsSupportBuyProfessional',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userSupportEps  是否支持企业项目，true表示是，false表示不是
    * hasNdr  是否存在ndr，true表示是，false表示不是，NDR为原旁路版防火墙，现已停止售卖。
    * isSupportPostpaid  是否支持按需购买，true表示是，false表示不是
    * isSupportBasicVersion  是否支持基础版，true表示是，false表示不是
    * isSupportBuyProfessional  是否支持购买专业版，true表示是，false表示不是
    * data  data
    *
    * @var string[]
    */
    protected static $getters = [
            'userSupportEps' => 'getUserSupportEps',
            'hasNdr' => 'getHasNdr',
            'isSupportPostpaid' => 'getIsSupportPostpaid',
            'isSupportBasicVersion' => 'getIsSupportBasicVersion',
            'isSupportBuyProfessional' => 'getIsSupportBuyProfessional',
            'data' => 'getData'
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
        $this->container['userSupportEps'] = isset($data['userSupportEps']) ? $data['userSupportEps'] : null;
        $this->container['hasNdr'] = isset($data['hasNdr']) ? $data['hasNdr'] : null;
        $this->container['isSupportPostpaid'] = isset($data['isSupportPostpaid']) ? $data['isSupportPostpaid'] : null;
        $this->container['isSupportBasicVersion'] = isset($data['isSupportBasicVersion']) ? $data['isSupportBasicVersion'] : null;
        $this->container['isSupportBuyProfessional'] = isset($data['isSupportBuyProfessional']) ? $data['isSupportBuyProfessional'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets userSupportEps
    *  是否支持企业项目，true表示是，false表示不是
    *
    * @return bool|null
    */
    public function getUserSupportEps()
    {
        return $this->container['userSupportEps'];
    }

    /**
    * Sets userSupportEps
    *
    * @param bool|null $userSupportEps 是否支持企业项目，true表示是，false表示不是
    *
    * @return $this
    */
    public function setUserSupportEps($userSupportEps)
    {
        $this->container['userSupportEps'] = $userSupportEps;
        return $this;
    }

    /**
    * Gets hasNdr
    *  是否存在ndr，true表示是，false表示不是，NDR为原旁路版防火墙，现已停止售卖。
    *
    * @return bool|null
    */
    public function getHasNdr()
    {
        return $this->container['hasNdr'];
    }

    /**
    * Sets hasNdr
    *
    * @param bool|null $hasNdr 是否存在ndr，true表示是，false表示不是，NDR为原旁路版防火墙，现已停止售卖。
    *
    * @return $this
    */
    public function setHasNdr($hasNdr)
    {
        $this->container['hasNdr'] = $hasNdr;
        return $this;
    }

    /**
    * Gets isSupportPostpaid
    *  是否支持按需购买，true表示是，false表示不是
    *
    * @return bool|null
    */
    public function getIsSupportPostpaid()
    {
        return $this->container['isSupportPostpaid'];
    }

    /**
    * Sets isSupportPostpaid
    *
    * @param bool|null $isSupportPostpaid 是否支持按需购买，true表示是，false表示不是
    *
    * @return $this
    */
    public function setIsSupportPostpaid($isSupportPostpaid)
    {
        $this->container['isSupportPostpaid'] = $isSupportPostpaid;
        return $this;
    }

    /**
    * Gets isSupportBasicVersion
    *  是否支持基础版，true表示是，false表示不是
    *
    * @return bool|null
    */
    public function getIsSupportBasicVersion()
    {
        return $this->container['isSupportBasicVersion'];
    }

    /**
    * Sets isSupportBasicVersion
    *
    * @param bool|null $isSupportBasicVersion 是否支持基础版，true表示是，false表示不是
    *
    * @return $this
    */
    public function setIsSupportBasicVersion($isSupportBasicVersion)
    {
        $this->container['isSupportBasicVersion'] = $isSupportBasicVersion;
        return $this;
    }

    /**
    * Gets isSupportBuyProfessional
    *  是否支持购买专业版，true表示是，false表示不是
    *
    * @return bool|null
    */
    public function getIsSupportBuyProfessional()
    {
        return $this->container['isSupportBuyProfessional'];
    }

    /**
    * Sets isSupportBuyProfessional
    *
    * @param bool|null $isSupportBuyProfessional 是否支持购买专业版，true表示是，false表示不是
    *
    * @return $this
    */
    public function setIsSupportBuyProfessional($isSupportBuyProfessional)
    {
        $this->container['isSupportBuyProfessional'] = $isSupportBuyProfessional;
        return $this;
    }

    /**
    * Gets data
    *  data
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\HttpFirewallInstanceListResponseData|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\HttpFirewallInstanceListResponseData|null $data data
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

