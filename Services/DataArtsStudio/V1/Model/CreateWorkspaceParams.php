<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWorkspaceParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWorkspaceParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'badRecordLocationName' => 'string',
            'description' => 'string',
            'epsId' => 'string',
            'jobLogLocationName' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'badRecordLocationName' => null,
        'description' => null,
        'epsId' => null,
        'jobLogLocationName' => null,
        'name' => null
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
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'badRecordLocationName' => 'bad_record_location_name',
            'description' => 'description',
            'epsId' => 'eps_id',
            'jobLogLocationName' => 'job_log_location_name',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    *
    * @var string[]
    */
    protected static $setters = [
            'badRecordLocationName' => 'setBadRecordLocationName',
            'description' => 'setDescription',
            'epsId' => 'setEpsId',
            'jobLogLocationName' => 'setJobLogLocationName',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * badRecordLocationName  DLI脏数据OBS路径
    * description  工作空间描述
    * epsId  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    * jobLogLocationName  作业日志OBS路径
    * name  工作空间名称
    *
    * @var string[]
    */
    protected static $getters = [
            'badRecordLocationName' => 'getBadRecordLocationName',
            'description' => 'getDescription',
            'epsId' => 'getEpsId',
            'jobLogLocationName' => 'getJobLogLocationName',
            'name' => 'getName'
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
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['jobLogLocationName'] = isset($data['jobLogLocationName']) ? $data['jobLogLocationName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['badRecordLocationName']) && (mb_strlen($this->container['badRecordLocationName']) > 128)) {
                $invalidProperties[] = "invalid value for 'badRecordLocationName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['badRecordLocationName']) && (mb_strlen($this->container['badRecordLocationName']) < 1)) {
                $invalidProperties[] = "invalid value for 'badRecordLocationName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['epsId'] === null) {
            $invalidProperties[] = "'epsId' can't be null";
        }
            if ((mb_strlen($this->container['epsId']) > 1)) {
                $invalidProperties[] = "invalid value for 'epsId', the character length must be smaller than or equal to 1.";
            }
            if ((mb_strlen($this->container['epsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'epsId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobLogLocationName']) && (mb_strlen($this->container['jobLogLocationName']) > 128)) {
                $invalidProperties[] = "invalid value for 'jobLogLocationName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['jobLogLocationName']) && (mb_strlen($this->container['jobLogLocationName']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobLogLocationName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
    * Gets epsId
    *  企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    *
    * @return string
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string $epsId 企业项目id，如果当前为公有云，且用户开启企业项目，则必选
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
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

