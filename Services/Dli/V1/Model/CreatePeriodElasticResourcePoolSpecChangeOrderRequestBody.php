<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePeriodElasticResourcePoolSpecChangeOrderRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePeriodElasticResourcePoolSpecChangeOrderRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * elasticResourcePoolName  弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * cloudServiceConsoleUrl  CBC订单跳转DLI console链接
    * promotionInfo  优惠信息
    * targetCu  包周期目标CU大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'elasticResourcePoolName' => 'string',
            'cloudServiceConsoleUrl' => 'string',
            'promotionInfo' => 'string',
            'targetCu' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * elasticResourcePoolName  弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * cloudServiceConsoleUrl  CBC订单跳转DLI console链接
    * promotionInfo  优惠信息
    * targetCu  包周期目标CU大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'elasticResourcePoolName' => null,
        'cloudServiceConsoleUrl' => null,
        'promotionInfo' => null,
        'targetCu' => 'int32'
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
    * elasticResourcePoolName  弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * cloudServiceConsoleUrl  CBC订单跳转DLI console链接
    * promotionInfo  优惠信息
    * targetCu  包周期目标CU大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'elasticResourcePoolName' => 'elastic_resource_pool_name',
            'cloudServiceConsoleUrl' => 'cloud_service_console_url',
            'promotionInfo' => 'promotion_info',
            'targetCu' => 'target_cu'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * elasticResourcePoolName  弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * cloudServiceConsoleUrl  CBC订单跳转DLI console链接
    * promotionInfo  优惠信息
    * targetCu  包周期目标CU大小
    *
    * @var string[]
    */
    protected static $setters = [
            'elasticResourcePoolName' => 'setElasticResourcePoolName',
            'cloudServiceConsoleUrl' => 'setCloudServiceConsoleUrl',
            'promotionInfo' => 'setPromotionInfo',
            'targetCu' => 'setTargetCu'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * elasticResourcePoolName  弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * cloudServiceConsoleUrl  CBC订单跳转DLI console链接
    * promotionInfo  优惠信息
    * targetCu  包周期目标CU大小
    *
    * @var string[]
    */
    protected static $getters = [
            'elasticResourcePoolName' => 'getElasticResourcePoolName',
            'cloudServiceConsoleUrl' => 'getCloudServiceConsoleUrl',
            'promotionInfo' => 'getPromotionInfo',
            'targetCu' => 'getTargetCu'
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
        $this->container['elasticResourcePoolName'] = isset($data['elasticResourcePoolName']) ? $data['elasticResourcePoolName'] : null;
        $this->container['cloudServiceConsoleUrl'] = isset($data['cloudServiceConsoleUrl']) ? $data['cloudServiceConsoleUrl'] : null;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
        $this->container['targetCu'] = isset($data['targetCu']) ? $data['targetCu'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['elasticResourcePoolName'] === null) {
            $invalidProperties[] = "'elasticResourcePoolName' can't be null";
        }
        if ($this->container['targetCu'] === null) {
            $invalidProperties[] = "'targetCu' can't be null";
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
    * Gets elasticResourcePoolName
    *  弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    *
    * @return string
    */
    public function getElasticResourcePoolName()
    {
        return $this->container['elasticResourcePoolName'];
    }

    /**
    * Sets elasticResourcePoolName
    *
    * @param string $elasticResourcePoolName 弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    *
    * @return $this
    */
    public function setElasticResourcePoolName($elasticResourcePoolName)
    {
        $this->container['elasticResourcePoolName'] = $elasticResourcePoolName;
        return $this;
    }

    /**
    * Gets cloudServiceConsoleUrl
    *  CBC订单跳转DLI console链接
    *
    * @return string|null
    */
    public function getCloudServiceConsoleUrl()
    {
        return $this->container['cloudServiceConsoleUrl'];
    }

    /**
    * Sets cloudServiceConsoleUrl
    *
    * @param string|null $cloudServiceConsoleUrl CBC订单跳转DLI console链接
    *
    * @return $this
    */
    public function setCloudServiceConsoleUrl($cloudServiceConsoleUrl)
    {
        $this->container['cloudServiceConsoleUrl'] = $cloudServiceConsoleUrl;
        return $this;
    }

    /**
    * Gets promotionInfo
    *  优惠信息
    *
    * @return string|null
    */
    public function getPromotionInfo()
    {
        return $this->container['promotionInfo'];
    }

    /**
    * Sets promotionInfo
    *
    * @param string|null $promotionInfo 优惠信息
    *
    * @return $this
    */
    public function setPromotionInfo($promotionInfo)
    {
        $this->container['promotionInfo'] = $promotionInfo;
        return $this;
    }

    /**
    * Gets targetCu
    *  包周期目标CU大小
    *
    * @return int
    */
    public function getTargetCu()
    {
        return $this->container['targetCu'];
    }

    /**
    * Sets targetCu
    *
    * @param int $targetCu 包周期目标CU大小
    *
    * @return $this
    */
    public function setTargetCu($targetCu)
    {
        $this->container['targetCu'] = $targetCu;
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

