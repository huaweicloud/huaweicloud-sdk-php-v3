<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubscriptionOrderResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubscriptionOrderResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * csbVersion  租户当前的版本信息 BASIC(基础版)，STANDARD（标准版），PROFESSIONAL（专业版），NA（无版本），大小写不敏感
    * ecsCount  ecs个数，当请求参数purchase=true时才会返回该值，否则为0
    * resources  资源列表
    * subscriptionCount  topic订阅条数，当请求参数为smn=true，返回该字段
    * subscriptions  租户订阅信息，当请求参数为smn=true，会返回租户名下可订阅的smn topic列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'csbVersion' => 'string',
            'ecsCount' => 'int',
            'resources' => '\HuaweiCloud\SDK\SecMaster\V1\Model\SubscriptionResource[]',
            'subscriptionCount' => 'int',
            'subscriptions' => '\HuaweiCloud\SDK\SecMaster\V1\Model\SmnSubscription[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * csbVersion  租户当前的版本信息 BASIC(基础版)，STANDARD（标准版），PROFESSIONAL（专业版），NA（无版本），大小写不敏感
    * ecsCount  ecs个数，当请求参数purchase=true时才会返回该值，否则为0
    * resources  资源列表
    * subscriptionCount  topic订阅条数，当请求参数为smn=true，返回该字段
    * subscriptions  租户订阅信息，当请求参数为smn=true，会返回租户名下可订阅的smn topic列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'csbVersion' => null,
        'ecsCount' => null,
        'resources' => null,
        'subscriptionCount' => 'int32',
        'subscriptions' => null
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
    * csbVersion  租户当前的版本信息 BASIC(基础版)，STANDARD（标准版），PROFESSIONAL（专业版），NA（无版本），大小写不敏感
    * ecsCount  ecs个数，当请求参数purchase=true时才会返回该值，否则为0
    * resources  资源列表
    * subscriptionCount  topic订阅条数，当请求参数为smn=true，返回该字段
    * subscriptions  租户订阅信息，当请求参数为smn=true，会返回租户名下可订阅的smn topic列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'csbVersion' => 'csb_version',
            'ecsCount' => 'ecs_count',
            'resources' => 'resources',
            'subscriptionCount' => 'subscription_count',
            'subscriptions' => 'subscriptions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * csbVersion  租户当前的版本信息 BASIC(基础版)，STANDARD（标准版），PROFESSIONAL（专业版），NA（无版本），大小写不敏感
    * ecsCount  ecs个数，当请求参数purchase=true时才会返回该值，否则为0
    * resources  资源列表
    * subscriptionCount  topic订阅条数，当请求参数为smn=true，返回该字段
    * subscriptions  租户订阅信息，当请求参数为smn=true，会返回租户名下可订阅的smn topic列表
    *
    * @var string[]
    */
    protected static $setters = [
            'csbVersion' => 'setCsbVersion',
            'ecsCount' => 'setEcsCount',
            'resources' => 'setResources',
            'subscriptionCount' => 'setSubscriptionCount',
            'subscriptions' => 'setSubscriptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * csbVersion  租户当前的版本信息 BASIC(基础版)，STANDARD（标准版），PROFESSIONAL（专业版），NA（无版本），大小写不敏感
    * ecsCount  ecs个数，当请求参数purchase=true时才会返回该值，否则为0
    * resources  资源列表
    * subscriptionCount  topic订阅条数，当请求参数为smn=true，返回该字段
    * subscriptions  租户订阅信息，当请求参数为smn=true，会返回租户名下可订阅的smn topic列表
    *
    * @var string[]
    */
    protected static $getters = [
            'csbVersion' => 'getCsbVersion',
            'ecsCount' => 'getEcsCount',
            'resources' => 'getResources',
            'subscriptionCount' => 'getSubscriptionCount',
            'subscriptions' => 'getSubscriptions'
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
    const CSB_VERSION_BASIC = 'BASIC';
    const CSB_VERSION_STANDARD = 'STANDARD';
    const CSB_VERSION_PROFESSIONAL = 'PROFESSIONAL';
    const CSB_VERSION_NA = 'NA';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCsbVersionAllowableValues()
    {
        return [
            self::CSB_VERSION_BASIC,
            self::CSB_VERSION_STANDARD,
            self::CSB_VERSION_PROFESSIONAL,
            self::CSB_VERSION_NA,
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
        $this->container['csbVersion'] = isset($data['csbVersion']) ? $data['csbVersion'] : null;
        $this->container['ecsCount'] = isset($data['ecsCount']) ? $data['ecsCount'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['subscriptionCount'] = isset($data['subscriptionCount']) ? $data['subscriptionCount'] : null;
        $this->container['subscriptions'] = isset($data['subscriptions']) ? $data['subscriptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCsbVersionAllowableValues();
                if (!is_null($this->container['csbVersion']) && !in_array($this->container['csbVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'csbVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['csbVersion']) && (mb_strlen($this->container['csbVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'csbVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['csbVersion']) && (mb_strlen($this->container['csbVersion']) < 2)) {
                $invalidProperties[] = "invalid value for 'csbVersion', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['ecsCount']) && ($this->container['ecsCount'] > 10000)) {
                $invalidProperties[] = "invalid value for 'ecsCount', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['ecsCount']) && ($this->container['ecsCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'ecsCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subscriptionCount']) && ($this->container['subscriptionCount'] > 1000)) {
                $invalidProperties[] = "invalid value for 'subscriptionCount', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['subscriptionCount']) && ($this->container['subscriptionCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'subscriptionCount', must be bigger than or equal to 0.";
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
    * Gets csbVersion
    *  租户当前的版本信息 BASIC(基础版)，STANDARD（标准版），PROFESSIONAL（专业版），NA（无版本），大小写不敏感
    *
    * @return string|null
    */
    public function getCsbVersion()
    {
        return $this->container['csbVersion'];
    }

    /**
    * Sets csbVersion
    *
    * @param string|null $csbVersion 租户当前的版本信息 BASIC(基础版)，STANDARD（标准版），PROFESSIONAL（专业版），NA（无版本），大小写不敏感
    *
    * @return $this
    */
    public function setCsbVersion($csbVersion)
    {
        $this->container['csbVersion'] = $csbVersion;
        return $this;
    }

    /**
    * Gets ecsCount
    *  ecs个数，当请求参数purchase=true时才会返回该值，否则为0
    *
    * @return int|null
    */
    public function getEcsCount()
    {
        return $this->container['ecsCount'];
    }

    /**
    * Sets ecsCount
    *
    * @param int|null $ecsCount ecs个数，当请求参数purchase=true时才会返回该值，否则为0
    *
    * @return $this
    */
    public function setEcsCount($ecsCount)
    {
        $this->container['ecsCount'] = $ecsCount;
        return $this;
    }

    /**
    * Gets resources
    *  资源列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\SubscriptionResource[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\SubscriptionResource[]|null $resources 资源列表
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets subscriptionCount
    *  topic订阅条数，当请求参数为smn=true，返回该字段
    *
    * @return int|null
    */
    public function getSubscriptionCount()
    {
        return $this->container['subscriptionCount'];
    }

    /**
    * Sets subscriptionCount
    *
    * @param int|null $subscriptionCount topic订阅条数，当请求参数为smn=true，返回该字段
    *
    * @return $this
    */
    public function setSubscriptionCount($subscriptionCount)
    {
        $this->container['subscriptionCount'] = $subscriptionCount;
        return $this;
    }

    /**
    * Gets subscriptions
    *  租户订阅信息，当请求参数为smn=true，会返回租户名下可订阅的smn topic列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\SmnSubscription[]|null
    */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
    * Sets subscriptions
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\SmnSubscription[]|null $subscriptions 租户订阅信息，当请求参数为smn=true，会返回租户名下可订阅的smn topic列表
    *
    * @return $this
    */
    public function setSubscriptions($subscriptions)
    {
        $this->container['subscriptions'] = $subscriptions;
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

