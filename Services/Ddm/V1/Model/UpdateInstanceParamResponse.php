<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateInstanceParamResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateInstanceParamResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeList  节点列表。
    * needRestart  是否需要重启实例。
    * jobId  任务id。
    * configId  参数组id。
    * configName  参数组名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeList' => 'string',
            'needRestart' => 'bool',
            'jobId' => 'string',
            'configId' => 'string',
            'configName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeList  节点列表。
    * needRestart  是否需要重启实例。
    * jobId  任务id。
    * configId  参数组id。
    * configName  参数组名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeList' => null,
        'needRestart' => null,
        'jobId' => null,
        'configId' => null,
        'configName' => null
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
    * nodeList  节点列表。
    * needRestart  是否需要重启实例。
    * jobId  任务id。
    * configId  参数组id。
    * configName  参数组名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeList' => 'nodeList',
            'needRestart' => 'needRestart',
            'jobId' => 'jobId',
            'configId' => 'configId',
            'configName' => 'configName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeList  节点列表。
    * needRestart  是否需要重启实例。
    * jobId  任务id。
    * configId  参数组id。
    * configName  参数组名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeList' => 'setNodeList',
            'needRestart' => 'setNeedRestart',
            'jobId' => 'setJobId',
            'configId' => 'setConfigId',
            'configName' => 'setConfigName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeList  节点列表。
    * needRestart  是否需要重启实例。
    * jobId  任务id。
    * configId  参数组id。
    * configName  参数组名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeList' => 'getNodeList',
            'needRestart' => 'getNeedRestart',
            'jobId' => 'getJobId',
            'configId' => 'getConfigId',
            'configName' => 'getConfigName'
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
        $this->container['nodeList'] = isset($data['nodeList']) ? $data['nodeList'] : null;
        $this->container['needRestart'] = isset($data['needRestart']) ? $data['needRestart'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['configId'] = isset($data['configId']) ? $data['configId'] : null;
        $this->container['configName'] = isset($data['configName']) ? $data['configName'] : null;
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
    * Gets nodeList
    *  节点列表。
    *
    * @return string|null
    */
    public function getNodeList()
    {
        return $this->container['nodeList'];
    }

    /**
    * Sets nodeList
    *
    * @param string|null $nodeList 节点列表。
    *
    * @return $this
    */
    public function setNodeList($nodeList)
    {
        $this->container['nodeList'] = $nodeList;
        return $this;
    }

    /**
    * Gets needRestart
    *  是否需要重启实例。
    *
    * @return bool|null
    */
    public function getNeedRestart()
    {
        return $this->container['needRestart'];
    }

    /**
    * Sets needRestart
    *
    * @param bool|null $needRestart 是否需要重启实例。
    *
    * @return $this
    */
    public function setNeedRestart($needRestart)
    {
        $this->container['needRestart'] = $needRestart;
        return $this;
    }

    /**
    * Gets jobId
    *  任务id。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets configId
    *  参数组id。
    *
    * @return string|null
    */
    public function getConfigId()
    {
        return $this->container['configId'];
    }

    /**
    * Sets configId
    *
    * @param string|null $configId 参数组id。
    *
    * @return $this
    */
    public function setConfigId($configId)
    {
        $this->container['configId'] = $configId;
        return $this;
    }

    /**
    * Gets configName
    *  参数组名称。
    *
    * @return string|null
    */
    public function getConfigName()
    {
        return $this->container['configName'];
    }

    /**
    * Sets configName
    *
    * @param string|null $configName 参数组名称。
    *
    * @return $this
    */
    public function setConfigName($configName)
    {
        $this->container['configName'] = $configName;
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

