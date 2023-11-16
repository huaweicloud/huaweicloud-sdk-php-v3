<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGovernancePolicysRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGovernancePolicysRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  该字段内容填为 \"application/json;charset=UTF-8\"。
    * xEngineId  微服务引擎专享版的实例ID
    * xEnterpriseProjectId  企业项目ID
    * environment  所属环境，填写all时表示查询所有环境。
    * app  所属应用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'xEngineId' => 'string',
            'xEnterpriseProjectId' => 'string',
            'environment' => 'string',
            'app' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  该字段内容填为 \"application/json;charset=UTF-8\"。
    * xEngineId  微服务引擎专享版的实例ID
    * xEnterpriseProjectId  企业项目ID
    * environment  所属环境，填写all时表示查询所有环境。
    * app  所属应用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'xEngineId' => null,
        'xEnterpriseProjectId' => null,
        'environment' => null,
        'app' => null
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
    * contentType  该字段内容填为 \"application/json;charset=UTF-8\"。
    * xEngineId  微服务引擎专享版的实例ID
    * xEnterpriseProjectId  企业项目ID
    * environment  所属环境，填写all时表示查询所有环境。
    * app  所属应用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'xEngineId' => 'x-engine-id',
            'xEnterpriseProjectId' => 'X-Enterprise-Project-ID',
            'environment' => 'environment',
            'app' => 'app'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  该字段内容填为 \"application/json;charset=UTF-8\"。
    * xEngineId  微服务引擎专享版的实例ID
    * xEnterpriseProjectId  企业项目ID
    * environment  所属环境，填写all时表示查询所有环境。
    * app  所属应用
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'xEngineId' => 'setXEngineId',
            'xEnterpriseProjectId' => 'setXEnterpriseProjectId',
            'environment' => 'setEnvironment',
            'app' => 'setApp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  该字段内容填为 \"application/json;charset=UTF-8\"。
    * xEngineId  微服务引擎专享版的实例ID
    * xEnterpriseProjectId  企业项目ID
    * environment  所属环境，填写all时表示查询所有环境。
    * app  所属应用
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'xEngineId' => 'getXEngineId',
            'xEnterpriseProjectId' => 'getXEnterpriseProjectId',
            'environment' => 'getEnvironment',
            'app' => 'getApp'
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['xEngineId'] = isset($data['xEngineId']) ? $data['xEngineId'] : null;
        $this->container['xEnterpriseProjectId'] = isset($data['xEnterpriseProjectId']) ? $data['xEnterpriseProjectId'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
        if ($this->container['xEngineId'] === null) {
            $invalidProperties[] = "'xEngineId' can't be null";
        }
        if ($this->container['xEnterpriseProjectId'] === null) {
            $invalidProperties[] = "'xEnterpriseProjectId' can't be null";
        }
        if ($this->container['environment'] === null) {
            $invalidProperties[] = "'environment' can't be null";
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
    * Gets contentType
    *  该字段内容填为 \"application/json;charset=UTF-8\"。
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType 该字段内容填为 \"application/json;charset=UTF-8\"。
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets xEngineId
    *  微服务引擎专享版的实例ID
    *
    * @return string
    */
    public function getXEngineId()
    {
        return $this->container['xEngineId'];
    }

    /**
    * Sets xEngineId
    *
    * @param string $xEngineId 微服务引擎专享版的实例ID
    *
    * @return $this
    */
    public function setXEngineId($xEngineId)
    {
        $this->container['xEngineId'] = $xEngineId;
        return $this;
    }

    /**
    * Gets xEnterpriseProjectId
    *  企业项目ID
    *
    * @return string
    */
    public function getXEnterpriseProjectId()
    {
        return $this->container['xEnterpriseProjectId'];
    }

    /**
    * Sets xEnterpriseProjectId
    *
    * @param string $xEnterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setXEnterpriseProjectId($xEnterpriseProjectId)
    {
        $this->container['xEnterpriseProjectId'] = $xEnterpriseProjectId;
        return $this;
    }

    /**
    * Gets environment
    *  所属环境，填写all时表示查询所有环境。
    *
    * @return string
    */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
    * Sets environment
    *
    * @param string $environment 所属环境，填写all时表示查询所有环境。
    *
    * @return $this
    */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;
        return $this;
    }

    /**
    * Gets app
    *  所属应用
    *
    * @return string|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string|null $app 所属应用
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
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

