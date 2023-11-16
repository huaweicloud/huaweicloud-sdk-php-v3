<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OutPutResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OutPutResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  构建任务所在项目的ID
    * name  产物名称
    * version  产物版本
    * packageType  产物类型
    * uri  产物路径
    * type  类型
    * dailyBuildNumber  构建编号，每日从1开始
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'name' => 'string',
            'version' => 'string',
            'packageType' => 'string',
            'uri' => 'string',
            'type' => 'string',
            'dailyBuildNumber' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  构建任务所在项目的ID
    * name  产物名称
    * version  产物版本
    * packageType  产物类型
    * uri  产物路径
    * type  类型
    * dailyBuildNumber  构建编号，每日从1开始
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'name' => null,
        'version' => null,
        'packageType' => null,
        'uri' => null,
        'type' => null,
        'dailyBuildNumber' => null
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
    * projectId  构建任务所在项目的ID
    * name  产物名称
    * version  产物版本
    * packageType  产物类型
    * uri  产物路径
    * type  类型
    * dailyBuildNumber  构建编号，每日从1开始
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'name' => 'name',
            'version' => 'version',
            'packageType' => 'package_type',
            'uri' => 'uri',
            'type' => 'type',
            'dailyBuildNumber' => 'daily_build_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  构建任务所在项目的ID
    * name  产物名称
    * version  产物版本
    * packageType  产物类型
    * uri  产物路径
    * type  类型
    * dailyBuildNumber  构建编号，每日从1开始
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'name' => 'setName',
            'version' => 'setVersion',
            'packageType' => 'setPackageType',
            'uri' => 'setUri',
            'type' => 'setType',
            'dailyBuildNumber' => 'setDailyBuildNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  构建任务所在项目的ID
    * name  产物名称
    * version  产物版本
    * packageType  产物类型
    * uri  产物路径
    * type  类型
    * dailyBuildNumber  构建编号，每日从1开始
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'name' => 'getName',
            'version' => 'getVersion',
            'packageType' => 'getPackageType',
            'uri' => 'getUri',
            'type' => 'getType',
            'dailyBuildNumber' => 'getDailyBuildNumber'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['packageType'] = isset($data['packageType']) ? $data['packageType'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['dailyBuildNumber'] = isset($data['dailyBuildNumber']) ? $data['dailyBuildNumber'] : null;
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
    * Gets projectId
    *  构建任务所在项目的ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 构建任务所在项目的ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets name
    *  产物名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 产物名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets version
    *  产物版本
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
    * @param string|null $version 产物版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets packageType
    *  产物类型
    *
    * @return string|null
    */
    public function getPackageType()
    {
        return $this->container['packageType'];
    }

    /**
    * Sets packageType
    *
    * @param string|null $packageType 产物类型
    *
    * @return $this
    */
    public function setPackageType($packageType)
    {
        $this->container['packageType'] = $packageType;
        return $this;
    }

    /**
    * Gets uri
    *  产物路径
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri 产物路径
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets dailyBuildNumber
    *  构建编号，每日从1开始
    *
    * @return string|null
    */
    public function getDailyBuildNumber()
    {
        return $this->container['dailyBuildNumber'];
    }

    /**
    * Sets dailyBuildNumber
    *
    * @param string|null $dailyBuildNumber 构建编号，每日从1开始
    *
    * @return $this
    */
    public function setDailyBuildNumber($dailyBuildNumber)
    {
        $this->container['dailyBuildNumber'] = $dailyBuildNumber;
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

