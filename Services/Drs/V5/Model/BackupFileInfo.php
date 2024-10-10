<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupFileInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupFileInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  备份文件名称。
    * obsPath  OBS桶中文件路径。  OBS场景：必选  RDS场景：缺省
    * rdsVersion  bak文件数据库版本。  OBS场景：缺省  RDS场景：必选
    * rdsSourceInstanceId  bak文件所属实例。  OBS场景：缺省  RDS场景：必选
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'obsPath' => 'string',
            'rdsVersion' => 'string',
            'rdsSourceInstanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  备份文件名称。
    * obsPath  OBS桶中文件路径。  OBS场景：必选  RDS场景：缺省
    * rdsVersion  bak文件数据库版本。  OBS场景：缺省  RDS场景：必选
    * rdsSourceInstanceId  bak文件所属实例。  OBS场景：缺省  RDS场景：必选
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'obsPath' => null,
        'rdsVersion' => null,
        'rdsSourceInstanceId' => null
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
    * name  备份文件名称。
    * obsPath  OBS桶中文件路径。  OBS场景：必选  RDS场景：缺省
    * rdsVersion  bak文件数据库版本。  OBS场景：缺省  RDS场景：必选
    * rdsSourceInstanceId  bak文件所属实例。  OBS场景：缺省  RDS场景：必选
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'obsPath' => 'obs_path',
            'rdsVersion' => 'rds_version',
            'rdsSourceInstanceId' => 'rds_source_instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  备份文件名称。
    * obsPath  OBS桶中文件路径。  OBS场景：必选  RDS场景：缺省
    * rdsVersion  bak文件数据库版本。  OBS场景：缺省  RDS场景：必选
    * rdsSourceInstanceId  bak文件所属实例。  OBS场景：缺省  RDS场景：必选
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'obsPath' => 'setObsPath',
            'rdsVersion' => 'setRdsVersion',
            'rdsSourceInstanceId' => 'setRdsSourceInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  备份文件名称。
    * obsPath  OBS桶中文件路径。  OBS场景：必选  RDS场景：缺省
    * rdsVersion  bak文件数据库版本。  OBS场景：缺省  RDS场景：必选
    * rdsSourceInstanceId  bak文件所属实例。  OBS场景：缺省  RDS场景：必选
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'obsPath' => 'getObsPath',
            'rdsVersion' => 'getRdsVersion',
            'rdsSourceInstanceId' => 'getRdsSourceInstanceId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['obsPath'] = isset($data['obsPath']) ? $data['obsPath'] : null;
        $this->container['rdsVersion'] = isset($data['rdsVersion']) ? $data['rdsVersion'] : null;
        $this->container['rdsSourceInstanceId'] = isset($data['rdsSourceInstanceId']) ? $data['rdsSourceInstanceId'] : null;
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
            if ((mb_strlen($this->container['name']) > 512)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['obsPath']) && (mb_strlen($this->container['obsPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'obsPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['obsPath']) && (mb_strlen($this->container['obsPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'obsPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rdsVersion']) && (mb_strlen($this->container['rdsVersion']) > 512)) {
                $invalidProperties[] = "invalid value for 'rdsVersion', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['rdsVersion']) && (mb_strlen($this->container['rdsVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'rdsVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rdsSourceInstanceId']) && (mb_strlen($this->container['rdsSourceInstanceId']) > 512)) {
                $invalidProperties[] = "invalid value for 'rdsSourceInstanceId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['rdsSourceInstanceId']) && (mb_strlen($this->container['rdsSourceInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'rdsSourceInstanceId', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  备份文件名称。
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
    * @param string $name 备份文件名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets obsPath
    *  OBS桶中文件路径。  OBS场景：必选  RDS场景：缺省
    *
    * @return string|null
    */
    public function getObsPath()
    {
        return $this->container['obsPath'];
    }

    /**
    * Sets obsPath
    *
    * @param string|null $obsPath OBS桶中文件路径。  OBS场景：必选  RDS场景：缺省
    *
    * @return $this
    */
    public function setObsPath($obsPath)
    {
        $this->container['obsPath'] = $obsPath;
        return $this;
    }

    /**
    * Gets rdsVersion
    *  bak文件数据库版本。  OBS场景：缺省  RDS场景：必选
    *
    * @return string|null
    */
    public function getRdsVersion()
    {
        return $this->container['rdsVersion'];
    }

    /**
    * Sets rdsVersion
    *
    * @param string|null $rdsVersion bak文件数据库版本。  OBS场景：缺省  RDS场景：必选
    *
    * @return $this
    */
    public function setRdsVersion($rdsVersion)
    {
        $this->container['rdsVersion'] = $rdsVersion;
        return $this;
    }

    /**
    * Gets rdsSourceInstanceId
    *  bak文件所属实例。  OBS场景：缺省  RDS场景：必选
    *
    * @return string|null
    */
    public function getRdsSourceInstanceId()
    {
        return $this->container['rdsSourceInstanceId'];
    }

    /**
    * Sets rdsSourceInstanceId
    *
    * @param string|null $rdsSourceInstanceId bak文件所属实例。  OBS场景：缺省  RDS场景：必选
    *
    * @return $this
    */
    public function setRdsSourceInstanceId($rdsSourceInstanceId)
    {
        $this->container['rdsSourceInstanceId'] = $rdsSourceInstanceId;
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

