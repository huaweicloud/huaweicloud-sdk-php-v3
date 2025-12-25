<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateShipperBodyShipperSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateShipperBody_shipper_source';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  区域信息
    * sourceDataspace  源数据空间ID
    * sourceDataspaceName  源数据空间名称
    * sourceIdentityRole  源身份角色
    * sourceTable  源表ID
    * sourceTableName  源表名称
    * sourcePipe  源管道ID
    * sourcePipeName  源管道名称
    * sourceType  源类型
    * sourceWorkspace  源工作空间ID
    * sourceWorkspaceName  源工作空间名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'sourceDataspace' => 'string',
            'sourceDataspaceName' => 'string',
            'sourceIdentityRole' => 'string',
            'sourceTable' => 'string',
            'sourceTableName' => 'string',
            'sourcePipe' => 'string',
            'sourcePipeName' => 'string',
            'sourceType' => 'int',
            'sourceWorkspace' => 'string',
            'sourceWorkspaceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  区域信息
    * sourceDataspace  源数据空间ID
    * sourceDataspaceName  源数据空间名称
    * sourceIdentityRole  源身份角色
    * sourceTable  源表ID
    * sourceTableName  源表名称
    * sourcePipe  源管道ID
    * sourcePipeName  源管道名称
    * sourceType  源类型
    * sourceWorkspace  源工作空间ID
    * sourceWorkspaceName  源工作空间名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'sourceDataspace' => null,
        'sourceDataspaceName' => null,
        'sourceIdentityRole' => null,
        'sourceTable' => null,
        'sourceTableName' => null,
        'sourcePipe' => null,
        'sourcePipeName' => null,
        'sourceType' => null,
        'sourceWorkspace' => null,
        'sourceWorkspaceName' => null
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
    * region  区域信息
    * sourceDataspace  源数据空间ID
    * sourceDataspaceName  源数据空间名称
    * sourceIdentityRole  源身份角色
    * sourceTable  源表ID
    * sourceTableName  源表名称
    * sourcePipe  源管道ID
    * sourcePipeName  源管道名称
    * sourceType  源类型
    * sourceWorkspace  源工作空间ID
    * sourceWorkspaceName  源工作空间名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'sourceDataspace' => 'source_dataspace',
            'sourceDataspaceName' => 'source_dataspace_name',
            'sourceIdentityRole' => 'source_identity_role',
            'sourceTable' => 'source_table',
            'sourceTableName' => 'source_table_name',
            'sourcePipe' => 'source_pipe',
            'sourcePipeName' => 'source_pipe_name',
            'sourceType' => 'source_type',
            'sourceWorkspace' => 'source_workspace',
            'sourceWorkspaceName' => 'source_workspace_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  区域信息
    * sourceDataspace  源数据空间ID
    * sourceDataspaceName  源数据空间名称
    * sourceIdentityRole  源身份角色
    * sourceTable  源表ID
    * sourceTableName  源表名称
    * sourcePipe  源管道ID
    * sourcePipeName  源管道名称
    * sourceType  源类型
    * sourceWorkspace  源工作空间ID
    * sourceWorkspaceName  源工作空间名称
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'sourceDataspace' => 'setSourceDataspace',
            'sourceDataspaceName' => 'setSourceDataspaceName',
            'sourceIdentityRole' => 'setSourceIdentityRole',
            'sourceTable' => 'setSourceTable',
            'sourceTableName' => 'setSourceTableName',
            'sourcePipe' => 'setSourcePipe',
            'sourcePipeName' => 'setSourcePipeName',
            'sourceType' => 'setSourceType',
            'sourceWorkspace' => 'setSourceWorkspace',
            'sourceWorkspaceName' => 'setSourceWorkspaceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  区域信息
    * sourceDataspace  源数据空间ID
    * sourceDataspaceName  源数据空间名称
    * sourceIdentityRole  源身份角色
    * sourceTable  源表ID
    * sourceTableName  源表名称
    * sourcePipe  源管道ID
    * sourcePipeName  源管道名称
    * sourceType  源类型
    * sourceWorkspace  源工作空间ID
    * sourceWorkspaceName  源工作空间名称
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'sourceDataspace' => 'getSourceDataspace',
            'sourceDataspaceName' => 'getSourceDataspaceName',
            'sourceIdentityRole' => 'getSourceIdentityRole',
            'sourceTable' => 'getSourceTable',
            'sourceTableName' => 'getSourceTableName',
            'sourcePipe' => 'getSourcePipe',
            'sourcePipeName' => 'getSourcePipeName',
            'sourceType' => 'getSourceType',
            'sourceWorkspace' => 'getSourceWorkspace',
            'sourceWorkspaceName' => 'getSourceWorkspaceName'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['sourceDataspace'] = isset($data['sourceDataspace']) ? $data['sourceDataspace'] : null;
        $this->container['sourceDataspaceName'] = isset($data['sourceDataspaceName']) ? $data['sourceDataspaceName'] : null;
        $this->container['sourceIdentityRole'] = isset($data['sourceIdentityRole']) ? $data['sourceIdentityRole'] : null;
        $this->container['sourceTable'] = isset($data['sourceTable']) ? $data['sourceTable'] : null;
        $this->container['sourceTableName'] = isset($data['sourceTableName']) ? $data['sourceTableName'] : null;
        $this->container['sourcePipe'] = isset($data['sourcePipe']) ? $data['sourcePipe'] : null;
        $this->container['sourcePipeName'] = isset($data['sourcePipeName']) ? $data['sourcePipeName'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sourceWorkspace'] = isset($data['sourceWorkspace']) ? $data['sourceWorkspace'] : null;
        $this->container['sourceWorkspaceName'] = isset($data['sourceWorkspaceName']) ? $data['sourceWorkspaceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sourceDataspace']) && (mb_strlen($this->container['sourceDataspace']) > 36)) {
                $invalidProperties[] = "invalid value for 'sourceDataspace', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sourceDataspace']) && (mb_strlen($this->container['sourceDataspace']) < 36)) {
                $invalidProperties[] = "invalid value for 'sourceDataspace', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['sourceDataspaceName']) && (mb_strlen($this->container['sourceDataspaceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'sourceDataspaceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sourceDataspaceName']) && (mb_strlen($this->container['sourceDataspaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceDataspaceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceTable']) && (mb_strlen($this->container['sourceTable']) > 36)) {
                $invalidProperties[] = "invalid value for 'sourceTable', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sourceTable']) && (mb_strlen($this->container['sourceTable']) < 36)) {
                $invalidProperties[] = "invalid value for 'sourceTable', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['sourceTableName']) && (mb_strlen($this->container['sourceTableName']) > 128)) {
                $invalidProperties[] = "invalid value for 'sourceTableName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sourceTableName']) && (mb_strlen($this->container['sourceTableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceTableName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourcePipe']) && (mb_strlen($this->container['sourcePipe']) > 36)) {
                $invalidProperties[] = "invalid value for 'sourcePipe', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sourcePipe']) && (mb_strlen($this->container['sourcePipe']) < 36)) {
                $invalidProperties[] = "invalid value for 'sourcePipe', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['sourcePipeName']) && (mb_strlen($this->container['sourcePipeName']) > 128)) {
                $invalidProperties[] = "invalid value for 'sourcePipeName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sourcePipeName']) && (mb_strlen($this->container['sourcePipeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourcePipeName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceWorkspace']) && (mb_strlen($this->container['sourceWorkspace']) > 36)) {
                $invalidProperties[] = "invalid value for 'sourceWorkspace', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sourceWorkspace']) && (mb_strlen($this->container['sourceWorkspace']) < 36)) {
                $invalidProperties[] = "invalid value for 'sourceWorkspace', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['sourceWorkspaceName']) && (mb_strlen($this->container['sourceWorkspaceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'sourceWorkspaceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sourceWorkspaceName']) && (mb_strlen($this->container['sourceWorkspaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceWorkspaceName', the character length must be bigger than or equal to 1.";
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
    * Gets region
    *  区域信息
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
    * @param string|null $region 区域信息
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets sourceDataspace
    *  源数据空间ID
    *
    * @return string|null
    */
    public function getSourceDataspace()
    {
        return $this->container['sourceDataspace'];
    }

    /**
    * Sets sourceDataspace
    *
    * @param string|null $sourceDataspace 源数据空间ID
    *
    * @return $this
    */
    public function setSourceDataspace($sourceDataspace)
    {
        $this->container['sourceDataspace'] = $sourceDataspace;
        return $this;
    }

    /**
    * Gets sourceDataspaceName
    *  源数据空间名称
    *
    * @return string|null
    */
    public function getSourceDataspaceName()
    {
        return $this->container['sourceDataspaceName'];
    }

    /**
    * Sets sourceDataspaceName
    *
    * @param string|null $sourceDataspaceName 源数据空间名称
    *
    * @return $this
    */
    public function setSourceDataspaceName($sourceDataspaceName)
    {
        $this->container['sourceDataspaceName'] = $sourceDataspaceName;
        return $this;
    }

    /**
    * Gets sourceIdentityRole
    *  源身份角色
    *
    * @return string|null
    */
    public function getSourceIdentityRole()
    {
        return $this->container['sourceIdentityRole'];
    }

    /**
    * Sets sourceIdentityRole
    *
    * @param string|null $sourceIdentityRole 源身份角色
    *
    * @return $this
    */
    public function setSourceIdentityRole($sourceIdentityRole)
    {
        $this->container['sourceIdentityRole'] = $sourceIdentityRole;
        return $this;
    }

    /**
    * Gets sourceTable
    *  源表ID
    *
    * @return string|null
    */
    public function getSourceTable()
    {
        return $this->container['sourceTable'];
    }

    /**
    * Sets sourceTable
    *
    * @param string|null $sourceTable 源表ID
    *
    * @return $this
    */
    public function setSourceTable($sourceTable)
    {
        $this->container['sourceTable'] = $sourceTable;
        return $this;
    }

    /**
    * Gets sourceTableName
    *  源表名称
    *
    * @return string|null
    */
    public function getSourceTableName()
    {
        return $this->container['sourceTableName'];
    }

    /**
    * Sets sourceTableName
    *
    * @param string|null $sourceTableName 源表名称
    *
    * @return $this
    */
    public function setSourceTableName($sourceTableName)
    {
        $this->container['sourceTableName'] = $sourceTableName;
        return $this;
    }

    /**
    * Gets sourcePipe
    *  源管道ID
    *
    * @return string|null
    */
    public function getSourcePipe()
    {
        return $this->container['sourcePipe'];
    }

    /**
    * Sets sourcePipe
    *
    * @param string|null $sourcePipe 源管道ID
    *
    * @return $this
    */
    public function setSourcePipe($sourcePipe)
    {
        $this->container['sourcePipe'] = $sourcePipe;
        return $this;
    }

    /**
    * Gets sourcePipeName
    *  源管道名称
    *
    * @return string|null
    */
    public function getSourcePipeName()
    {
        return $this->container['sourcePipeName'];
    }

    /**
    * Sets sourcePipeName
    *
    * @param string|null $sourcePipeName 源管道名称
    *
    * @return $this
    */
    public function setSourcePipeName($sourcePipeName)
    {
        $this->container['sourcePipeName'] = $sourcePipeName;
        return $this;
    }

    /**
    * Gets sourceType
    *  源类型
    *
    * @return int|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param int|null $sourceType 源类型
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets sourceWorkspace
    *  源工作空间ID
    *
    * @return string|null
    */
    public function getSourceWorkspace()
    {
        return $this->container['sourceWorkspace'];
    }

    /**
    * Sets sourceWorkspace
    *
    * @param string|null $sourceWorkspace 源工作空间ID
    *
    * @return $this
    */
    public function setSourceWorkspace($sourceWorkspace)
    {
        $this->container['sourceWorkspace'] = $sourceWorkspace;
        return $this;
    }

    /**
    * Gets sourceWorkspaceName
    *  源工作空间名称
    *
    * @return string|null
    */
    public function getSourceWorkspaceName()
    {
        return $this->container['sourceWorkspaceName'];
    }

    /**
    * Sets sourceWorkspaceName
    *
    * @param string|null $sourceWorkspaceName 源工作空间名称
    *
    * @return $this
    */
    public function setSourceWorkspaceName($sourceWorkspaceName)
    {
        $this->container['sourceWorkspaceName'] = $sourceWorkspaceName;
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

