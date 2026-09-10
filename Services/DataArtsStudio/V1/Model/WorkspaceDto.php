<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkspaceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'workspaceDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    * epsId  企业项目ID
    * mode  工作空间模式。0：简易模式；1：企业模式
    * status  工作空间状态。0：正常；5：冻结
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'badRecordLocationName' => 'string',
            'description' => 'string',
            'jobLogLocationName' => 'string',
            'name' => 'string',
            'epsId' => 'string',
            'mode' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    * epsId  企业项目ID
    * mode  工作空间模式。0：简易模式；1：企业模式
    * status  工作空间状态。0：正常；5：冻结
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'badRecordLocationName' => null,
        'description' => null,
        'jobLogLocationName' => null,
        'name' => null,
        'epsId' => null,
        'mode' => null,
        'status' => null
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
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    * epsId  企业项目ID
    * mode  工作空间模式。0：简易模式；1：企业模式
    * status  工作空间状态。0：正常；5：冻结
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'badRecordLocationName' => 'bad_record_location_name',
            'description' => 'description',
            'jobLogLocationName' => 'job_log_location_name',
            'name' => 'name',
            'epsId' => 'eps_id',
            'mode' => 'mode',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    * epsId  企业项目ID
    * mode  工作空间模式。0：简易模式；1：企业模式
    * status  工作空间状态。0：正常；5：冻结
    *
    * @var string[]
    */
    protected static $setters = [
            'badRecordLocationName' => 'setBadRecordLocationName',
            'description' => 'setDescription',
            'jobLogLocationName' => 'setJobLogLocationName',
            'name' => 'setName',
            'epsId' => 'setEpsId',
            'mode' => 'setMode',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    * epsId  企业项目ID
    * mode  工作空间模式。0：简易模式；1：企业模式
    * status  工作空间状态。0：正常；5：冻结
    *
    * @var string[]
    */
    protected static $getters = [
            'badRecordLocationName' => 'getBadRecordLocationName',
            'description' => 'getDescription',
            'jobLogLocationName' => 'getJobLogLocationName',
            'name' => 'getName',
            'epsId' => 'getEpsId',
            'mode' => 'getMode',
            'status' => 'getStatus'
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
        $this->container['badRecordLocationName'] = isset($data['badRecordLocationName']) ? $data['badRecordLocationName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['jobLogLocationName'] = isset($data['jobLogLocationName']) ? $data['jobLogLocationName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets badRecordLocationName
    *  DLI脏数据OBS路径
    *
    * @return string|null
    */
    public function getBadRecordLocationName()
    {
        return $this->container['badRecordLocationName'];
    }

    /**
    * Sets badRecordLocationName
    *
    * @param string|null $badRecordLocationName DLI脏数据OBS路径
    *
    * @return $this
    */
    public function setBadRecordLocationName($badRecordLocationName)
    {
        $this->container['badRecordLocationName'] = $badRecordLocationName;
        return $this;
    }

    /**
    * Gets description
    *  工作空间描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 工作空间描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets jobLogLocationName
    *  作业日志OBS路径
    *
    * @return string|null
    */
    public function getJobLogLocationName()
    {
        return $this->container['jobLogLocationName'];
    }

    /**
    * Sets jobLogLocationName
    *
    * @param string|null $jobLogLocationName 作业日志OBS路径
    *
    * @return $this
    */
    public function setJobLogLocationName($jobLogLocationName)
    {
        $this->container['jobLogLocationName'] = $jobLogLocationName;
        return $this;
    }

    /**
    * Gets name
    *  工作空间名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 工作空间名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets epsId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string|null $epsId 企业项目ID
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets mode
    *  工作空间模式。0：简易模式；1：企业模式
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 工作空间模式。0：简易模式；1：企业模式
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets status
    *  工作空间状态。0：正常；5：冻结
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 工作空间状态。0：正常；5：冻结
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

