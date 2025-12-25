<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowShipperResponseBodyDataShipperSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowShipperResponseBody_data_shipper_source';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataType  数据类型
    * dataspace  数据空间
    * dataspaceName  数据空间名称
    * id  源ID
    * identity  标识
    * pipe  管道ID
    * pipeName  管道名称
    * region  区域
    * type  类型
    * workspace  工作空间ID
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataType' => 'int',
            'dataspace' => 'string',
            'dataspaceName' => 'string',
            'id' => 'int',
            'identity' => 'string',
            'pipe' => 'string',
            'pipeName' => 'string',
            'region' => 'string',
            'type' => 'int',
            'workspace' => 'string',
            'workspaceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataType  数据类型
    * dataspace  数据空间
    * dataspaceName  数据空间名称
    * id  源ID
    * identity  标识
    * pipe  管道ID
    * pipeName  管道名称
    * region  区域
    * type  类型
    * workspace  工作空间ID
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataType' => null,
        'dataspace' => null,
        'dataspaceName' => null,
        'id' => null,
        'identity' => null,
        'pipe' => null,
        'pipeName' => null,
        'region' => null,
        'type' => null,
        'workspace' => null,
        'workspaceName' => null
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
    * dataType  数据类型
    * dataspace  数据空间
    * dataspaceName  数据空间名称
    * id  源ID
    * identity  标识
    * pipe  管道ID
    * pipeName  管道名称
    * region  区域
    * type  类型
    * workspace  工作空间ID
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataType' => 'data_type',
            'dataspace' => 'dataspace',
            'dataspaceName' => 'dataspace_name',
            'id' => 'id',
            'identity' => 'identity',
            'pipe' => 'pipe',
            'pipeName' => 'pipe_name',
            'region' => 'region',
            'type' => 'type',
            'workspace' => 'workspace',
            'workspaceName' => 'workspace_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataType  数据类型
    * dataspace  数据空间
    * dataspaceName  数据空间名称
    * id  源ID
    * identity  标识
    * pipe  管道ID
    * pipeName  管道名称
    * region  区域
    * type  类型
    * workspace  工作空间ID
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $setters = [
            'dataType' => 'setDataType',
            'dataspace' => 'setDataspace',
            'dataspaceName' => 'setDataspaceName',
            'id' => 'setId',
            'identity' => 'setIdentity',
            'pipe' => 'setPipe',
            'pipeName' => 'setPipeName',
            'region' => 'setRegion',
            'type' => 'setType',
            'workspace' => 'setWorkspace',
            'workspaceName' => 'setWorkspaceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataType  数据类型
    * dataspace  数据空间
    * dataspaceName  数据空间名称
    * id  源ID
    * identity  标识
    * pipe  管道ID
    * pipeName  管道名称
    * region  区域
    * type  类型
    * workspace  工作空间ID
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $getters = [
            'dataType' => 'getDataType',
            'dataspace' => 'getDataspace',
            'dataspaceName' => 'getDataspaceName',
            'id' => 'getId',
            'identity' => 'getIdentity',
            'pipe' => 'getPipe',
            'pipeName' => 'getPipeName',
            'region' => 'getRegion',
            'type' => 'getType',
            'workspace' => 'getWorkspace',
            'workspaceName' => 'getWorkspaceName'
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
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['dataspace'] = isset($data['dataspace']) ? $data['dataspace'] : null;
        $this->container['dataspaceName'] = isset($data['dataspaceName']) ? $data['dataspaceName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['identity'] = isset($data['identity']) ? $data['identity'] : null;
        $this->container['pipe'] = isset($data['pipe']) ? $data['pipe'] : null;
        $this->container['pipeName'] = isset($data['pipeName']) ? $data['pipeName'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['workspaceName'] = isset($data['workspaceName']) ? $data['workspaceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dataspace']) && (mb_strlen($this->container['dataspace']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspace', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataspace']) && (mb_strlen($this->container['dataspace']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspace', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['dataspaceName']) && (mb_strlen($this->container['dataspaceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dataspaceName']) && (mb_strlen($this->container['dataspaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['identity']) && (mb_strlen($this->container['identity']) > 128)) {
                $invalidProperties[] = "invalid value for 'identity', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['identity']) && (mb_strlen($this->container['identity']) < 1)) {
                $invalidProperties[] = "invalid value for 'identity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pipe']) && (mb_strlen($this->container['pipe']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipe', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipe']) && (mb_strlen($this->container['pipe']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipe', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) > 128)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 128)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspace']) && (mb_strlen($this->container['workspace']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['workspace']) && (mb_strlen($this->container['workspace']) < 36)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['workspaceName']) && (mb_strlen($this->container['workspaceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspaceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['workspaceName']) && (mb_strlen($this->container['workspaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceName', the character length must be bigger than or equal to 1.";
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
    * Gets dataType
    *  数据类型
    *
    * @return int|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param int|null $dataType 数据类型
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets dataspace
    *  数据空间
    *
    * @return string|null
    */
    public function getDataspace()
    {
        return $this->container['dataspace'];
    }

    /**
    * Sets dataspace
    *
    * @param string|null $dataspace 数据空间
    *
    * @return $this
    */
    public function setDataspace($dataspace)
    {
        $this->container['dataspace'] = $dataspace;
        return $this;
    }

    /**
    * Gets dataspaceName
    *  数据空间名称
    *
    * @return string|null
    */
    public function getDataspaceName()
    {
        return $this->container['dataspaceName'];
    }

    /**
    * Sets dataspaceName
    *
    * @param string|null $dataspaceName 数据空间名称
    *
    * @return $this
    */
    public function setDataspaceName($dataspaceName)
    {
        $this->container['dataspaceName'] = $dataspaceName;
        return $this;
    }

    /**
    * Gets id
    *  源ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 源ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets identity
    *  标识
    *
    * @return string|null
    */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
    * Sets identity
    *
    * @param string|null $identity 标识
    *
    * @return $this
    */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;
        return $this;
    }

    /**
    * Gets pipe
    *  管道ID
    *
    * @return string|null
    */
    public function getPipe()
    {
        return $this->container['pipe'];
    }

    /**
    * Sets pipe
    *
    * @param string|null $pipe 管道ID
    *
    * @return $this
    */
    public function setPipe($pipe)
    {
        $this->container['pipe'] = $pipe;
        return $this;
    }

    /**
    * Gets pipeName
    *  管道名称
    *
    * @return string|null
    */
    public function getPipeName()
    {
        return $this->container['pipeName'];
    }

    /**
    * Sets pipeName
    *
    * @param string|null $pipeName 管道名称
    *
    * @return $this
    */
    public function setPipeName($pipeName)
    {
        $this->container['pipeName'] = $pipeName;
        return $this;
    }

    /**
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets workspace
    *  工作空间ID
    *
    * @return string|null
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string|null $workspace 工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets workspaceName
    *  工作空间名称
    *
    * @return string|null
    */
    public function getWorkspaceName()
    {
        return $this->container['workspaceName'];
    }

    /**
    * Sets workspaceName
    *
    * @param string|null $workspaceName 工作空间名称
    *
    * @return $this
    */
    public function setWorkspaceName($workspaceName)
    {
        $this->container['workspaceName'] = $workspaceName;
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

