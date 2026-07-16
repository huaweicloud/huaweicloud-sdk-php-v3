<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlgorithmEngine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlgorithmEngine';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineId  引擎规格的ID。如“caffe-1.0.0-python2.7”。
    * engineName  引擎规格的名称。如“Caffe”。
    * engineVersion  引擎规格的版本。对一个引擎名称，有多个版本的引擎，如使用python2.7的\"Caffe-1.0.0-python2.7\"等。
    * v1Compatible  是否为v1兼容模式。
    * runUser  引擎默认启动用户uid。
    * imageUrl  算法选择的自定义镜像地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineId' => 'string',
            'engineName' => 'string',
            'engineVersion' => 'string',
            'v1Compatible' => 'bool',
            'runUser' => 'string',
            'imageUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineId  引擎规格的ID。如“caffe-1.0.0-python2.7”。
    * engineName  引擎规格的名称。如“Caffe”。
    * engineVersion  引擎规格的版本。对一个引擎名称，有多个版本的引擎，如使用python2.7的\"Caffe-1.0.0-python2.7\"等。
    * v1Compatible  是否为v1兼容模式。
    * runUser  引擎默认启动用户uid。
    * imageUrl  算法选择的自定义镜像地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineId' => null,
        'engineName' => null,
        'engineVersion' => null,
        'v1Compatible' => null,
        'runUser' => null,
        'imageUrl' => null
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
    * engineId  引擎规格的ID。如“caffe-1.0.0-python2.7”。
    * engineName  引擎规格的名称。如“Caffe”。
    * engineVersion  引擎规格的版本。对一个引擎名称，有多个版本的引擎，如使用python2.7的\"Caffe-1.0.0-python2.7\"等。
    * v1Compatible  是否为v1兼容模式。
    * runUser  引擎默认启动用户uid。
    * imageUrl  算法选择的自定义镜像地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineId' => 'engine_id',
            'engineName' => 'engine_name',
            'engineVersion' => 'engine_version',
            'v1Compatible' => 'v1_compatible',
            'runUser' => 'run_user',
            'imageUrl' => 'image_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineId  引擎规格的ID。如“caffe-1.0.0-python2.7”。
    * engineName  引擎规格的名称。如“Caffe”。
    * engineVersion  引擎规格的版本。对一个引擎名称，有多个版本的引擎，如使用python2.7的\"Caffe-1.0.0-python2.7\"等。
    * v1Compatible  是否为v1兼容模式。
    * runUser  引擎默认启动用户uid。
    * imageUrl  算法选择的自定义镜像地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'engineId' => 'setEngineId',
            'engineName' => 'setEngineName',
            'engineVersion' => 'setEngineVersion',
            'v1Compatible' => 'setV1Compatible',
            'runUser' => 'setRunUser',
            'imageUrl' => 'setImageUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineId  引擎规格的ID。如“caffe-1.0.0-python2.7”。
    * engineName  引擎规格的名称。如“Caffe”。
    * engineVersion  引擎规格的版本。对一个引擎名称，有多个版本的引擎，如使用python2.7的\"Caffe-1.0.0-python2.7\"等。
    * v1Compatible  是否为v1兼容模式。
    * runUser  引擎默认启动用户uid。
    * imageUrl  算法选择的自定义镜像地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'engineId' => 'getEngineId',
            'engineName' => 'getEngineName',
            'engineVersion' => 'getEngineVersion',
            'v1Compatible' => 'getV1Compatible',
            'runUser' => 'getRunUser',
            'imageUrl' => 'getImageUrl'
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
        $this->container['engineId'] = isset($data['engineId']) ? $data['engineId'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['v1Compatible'] = isset($data['v1Compatible']) ? $data['v1Compatible'] : null;
        $this->container['runUser'] = isset($data['runUser']) ? $data['runUser'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
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
    * Gets engineId
    *  引擎规格的ID。如“caffe-1.0.0-python2.7”。
    *
    * @return string|null
    */
    public function getEngineId()
    {
        return $this->container['engineId'];
    }

    /**
    * Sets engineId
    *
    * @param string|null $engineId 引擎规格的ID。如“caffe-1.0.0-python2.7”。
    *
    * @return $this
    */
    public function setEngineId($engineId)
    {
        $this->container['engineId'] = $engineId;
        return $this;
    }

    /**
    * Gets engineName
    *  引擎规格的名称。如“Caffe”。
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName 引擎规格的名称。如“Caffe”。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎规格的版本。对一个引擎名称，有多个版本的引擎，如使用python2.7的\"Caffe-1.0.0-python2.7\"等。
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 引擎规格的版本。对一个引擎名称，有多个版本的引擎，如使用python2.7的\"Caffe-1.0.0-python2.7\"等。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets v1Compatible
    *  是否为v1兼容模式。
    *
    * @return bool|null
    */
    public function getV1Compatible()
    {
        return $this->container['v1Compatible'];
    }

    /**
    * Sets v1Compatible
    *
    * @param bool|null $v1Compatible 是否为v1兼容模式。
    *
    * @return $this
    */
    public function setV1Compatible($v1Compatible)
    {
        $this->container['v1Compatible'] = $v1Compatible;
        return $this;
    }

    /**
    * Gets runUser
    *  引擎默认启动用户uid。
    *
    * @return string|null
    */
    public function getRunUser()
    {
        return $this->container['runUser'];
    }

    /**
    * Sets runUser
    *
    * @param string|null $runUser 引擎默认启动用户uid。
    *
    * @return $this
    */
    public function setRunUser($runUser)
    {
        $this->container['runUser'] = $runUser;
        return $this;
    }

    /**
    * Gets imageUrl
    *  算法选择的自定义镜像地址。
    *
    * @return string|null
    */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
    * Sets imageUrl
    *
    * @param string|null $imageUrl 算法选择的自定义镜像地址。
    *
    * @return $this
    */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;
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

