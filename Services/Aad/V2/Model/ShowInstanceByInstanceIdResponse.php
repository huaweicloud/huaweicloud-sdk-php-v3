<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceByInstanceIdResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceByInstanceIdResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceName  实例名称
    * enterpriseProjectId  企业项目id
    * version  版本
    * expireTime  过期时间
    * createTime  创建时间
    * currentTime  当前时间
    * productSpecData  productSpecData
    * instanceConfig  instanceConfig
    * elasticServiceBwUpdateEnable  弹性业务带宽是否可更新
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceName' => 'string',
            'enterpriseProjectId' => 'string',
            'version' => 'string',
            'expireTime' => 'int',
            'createTime' => 'int',
            'currentTime' => 'int',
            'productSpecData' => '\HuaweiCloud\SDK\Aad\V2\Model\ProductSpecData',
            'instanceConfig' => '\HuaweiCloud\SDK\Aad\V2\Model\InstanceConfig',
            'elasticServiceBwUpdateEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceName  实例名称
    * enterpriseProjectId  企业项目id
    * version  版本
    * expireTime  过期时间
    * createTime  创建时间
    * currentTime  当前时间
    * productSpecData  productSpecData
    * instanceConfig  instanceConfig
    * elasticServiceBwUpdateEnable  弹性业务带宽是否可更新
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceName' => null,
        'enterpriseProjectId' => null,
        'version' => null,
        'expireTime' => 'int32',
        'createTime' => 'int32',
        'currentTime' => 'int32',
        'productSpecData' => null,
        'instanceConfig' => null,
        'elasticServiceBwUpdateEnable' => null
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
    * instanceName  实例名称
    * enterpriseProjectId  企业项目id
    * version  版本
    * expireTime  过期时间
    * createTime  创建时间
    * currentTime  当前时间
    * productSpecData  productSpecData
    * instanceConfig  instanceConfig
    * elasticServiceBwUpdateEnable  弹性业务带宽是否可更新
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceName' => 'instance_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'version' => 'version',
            'expireTime' => 'expire_time',
            'createTime' => 'create_time',
            'currentTime' => 'current_time',
            'productSpecData' => 'product_spec_data',
            'instanceConfig' => 'instance_config',
            'elasticServiceBwUpdateEnable' => 'elastic_service_bw_update_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceName  实例名称
    * enterpriseProjectId  企业项目id
    * version  版本
    * expireTime  过期时间
    * createTime  创建时间
    * currentTime  当前时间
    * productSpecData  productSpecData
    * instanceConfig  instanceConfig
    * elasticServiceBwUpdateEnable  弹性业务带宽是否可更新
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceName' => 'setInstanceName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'version' => 'setVersion',
            'expireTime' => 'setExpireTime',
            'createTime' => 'setCreateTime',
            'currentTime' => 'setCurrentTime',
            'productSpecData' => 'setProductSpecData',
            'instanceConfig' => 'setInstanceConfig',
            'elasticServiceBwUpdateEnable' => 'setElasticServiceBwUpdateEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceName  实例名称
    * enterpriseProjectId  企业项目id
    * version  版本
    * expireTime  过期时间
    * createTime  创建时间
    * currentTime  当前时间
    * productSpecData  productSpecData
    * instanceConfig  instanceConfig
    * elasticServiceBwUpdateEnable  弹性业务带宽是否可更新
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceName' => 'getInstanceName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'version' => 'getVersion',
            'expireTime' => 'getExpireTime',
            'createTime' => 'getCreateTime',
            'currentTime' => 'getCurrentTime',
            'productSpecData' => 'getProductSpecData',
            'instanceConfig' => 'getInstanceConfig',
            'elasticServiceBwUpdateEnable' => 'getElasticServiceBwUpdateEnable'
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['currentTime'] = isset($data['currentTime']) ? $data['currentTime'] : null;
        $this->container['productSpecData'] = isset($data['productSpecData']) ? $data['productSpecData'] : null;
        $this->container['instanceConfig'] = isset($data['instanceConfig']) ? $data['instanceConfig'] : null;
        $this->container['elasticServiceBwUpdateEnable'] = isset($data['elasticServiceBwUpdateEnable']) ? $data['elasticServiceBwUpdateEnable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 32768)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 32768)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 32768)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] > 2000)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 2000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['currentTime']) && ($this->container['currentTime'] > 2000)) {
                $invalidProperties[] = "invalid value for 'currentTime', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['currentTime']) && ($this->container['currentTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'currentTime', must be bigger than or equal to 0.";
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
    * Gets instanceName
    *  实例名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets expireTime
    *  过期时间
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 过期时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets currentTime
    *  当前时间
    *
    * @return int|null
    */
    public function getCurrentTime()
    {
        return $this->container['currentTime'];
    }

    /**
    * Sets currentTime
    *
    * @param int|null $currentTime 当前时间
    *
    * @return $this
    */
    public function setCurrentTime($currentTime)
    {
        $this->container['currentTime'] = $currentTime;
        return $this;
    }

    /**
    * Gets productSpecData
    *  productSpecData
    *
    * @return \HuaweiCloud\SDK\Aad\V2\Model\ProductSpecData|null
    */
    public function getProductSpecData()
    {
        return $this->container['productSpecData'];
    }

    /**
    * Sets productSpecData
    *
    * @param \HuaweiCloud\SDK\Aad\V2\Model\ProductSpecData|null $productSpecData productSpecData
    *
    * @return $this
    */
    public function setProductSpecData($productSpecData)
    {
        $this->container['productSpecData'] = $productSpecData;
        return $this;
    }

    /**
    * Gets instanceConfig
    *  instanceConfig
    *
    * @return \HuaweiCloud\SDK\Aad\V2\Model\InstanceConfig|null
    */
    public function getInstanceConfig()
    {
        return $this->container['instanceConfig'];
    }

    /**
    * Sets instanceConfig
    *
    * @param \HuaweiCloud\SDK\Aad\V2\Model\InstanceConfig|null $instanceConfig instanceConfig
    *
    * @return $this
    */
    public function setInstanceConfig($instanceConfig)
    {
        $this->container['instanceConfig'] = $instanceConfig;
        return $this;
    }

    /**
    * Gets elasticServiceBwUpdateEnable
    *  弹性业务带宽是否可更新
    *
    * @return bool|null
    */
    public function getElasticServiceBwUpdateEnable()
    {
        return $this->container['elasticServiceBwUpdateEnable'];
    }

    /**
    * Sets elasticServiceBwUpdateEnable
    *
    * @param bool|null $elasticServiceBwUpdateEnable 弹性业务带宽是否可更新
    *
    * @return $this
    */
    public function setElasticServiceBwUpdateEnable($elasticServiceBwUpdateEnable)
    {
        $this->container['elasticServiceBwUpdateEnable'] = $elasticServiceBwUpdateEnable;
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

