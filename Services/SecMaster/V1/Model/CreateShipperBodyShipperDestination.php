<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateShipperBodyShipperDestination implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateShipperBody_shipper_destination';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataParam  数据参数
    * destinationDataspace  目标数据空间ID
    * destinationDataspaceName  目标数据空间名称
    * destinationIdentityRole  目标身份角色
    * destinationTable  目标表ID
    * destinationTableName  目标表名称
    * destinationPipe  目标管道ID
    * destinationPipeName  目标管道名称
    * destinationRegion  目标区域信息
    * destinationShipperType  目标投递类型
    * destinationWorkspace  目标工作空间ID
    * destinationWorkspaceName  目标工作空间名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataParam' => 'string',
            'destinationDataspace' => 'string',
            'destinationDataspaceName' => 'string',
            'destinationIdentityRole' => 'string',
            'destinationTable' => 'string',
            'destinationTableName' => 'string',
            'destinationPipe' => 'string',
            'destinationPipeName' => 'string',
            'destinationRegion' => 'string',
            'destinationShipperType' => 'int',
            'destinationWorkspace' => 'string',
            'destinationWorkspaceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataParam  数据参数
    * destinationDataspace  目标数据空间ID
    * destinationDataspaceName  目标数据空间名称
    * destinationIdentityRole  目标身份角色
    * destinationTable  目标表ID
    * destinationTableName  目标表名称
    * destinationPipe  目标管道ID
    * destinationPipeName  目标管道名称
    * destinationRegion  目标区域信息
    * destinationShipperType  目标投递类型
    * destinationWorkspace  目标工作空间ID
    * destinationWorkspaceName  目标工作空间名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataParam' => null,
        'destinationDataspace' => null,
        'destinationDataspaceName' => null,
        'destinationIdentityRole' => null,
        'destinationTable' => null,
        'destinationTableName' => null,
        'destinationPipe' => null,
        'destinationPipeName' => null,
        'destinationRegion' => null,
        'destinationShipperType' => null,
        'destinationWorkspace' => null,
        'destinationWorkspaceName' => null
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
    * dataParam  数据参数
    * destinationDataspace  目标数据空间ID
    * destinationDataspaceName  目标数据空间名称
    * destinationIdentityRole  目标身份角色
    * destinationTable  目标表ID
    * destinationTableName  目标表名称
    * destinationPipe  目标管道ID
    * destinationPipeName  目标管道名称
    * destinationRegion  目标区域信息
    * destinationShipperType  目标投递类型
    * destinationWorkspace  目标工作空间ID
    * destinationWorkspaceName  目标工作空间名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataParam' => 'data_param',
            'destinationDataspace' => 'destination_dataspace',
            'destinationDataspaceName' => 'destination_dataspace_name',
            'destinationIdentityRole' => 'destination_identity_role',
            'destinationTable' => 'destination_table',
            'destinationTableName' => 'destination_table_name',
            'destinationPipe' => 'destination_pipe',
            'destinationPipeName' => 'destination_pipe_name',
            'destinationRegion' => 'destination_region',
            'destinationShipperType' => 'destination_shipper_type',
            'destinationWorkspace' => 'destination_workspace',
            'destinationWorkspaceName' => 'destination_workspace_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataParam  数据参数
    * destinationDataspace  目标数据空间ID
    * destinationDataspaceName  目标数据空间名称
    * destinationIdentityRole  目标身份角色
    * destinationTable  目标表ID
    * destinationTableName  目标表名称
    * destinationPipe  目标管道ID
    * destinationPipeName  目标管道名称
    * destinationRegion  目标区域信息
    * destinationShipperType  目标投递类型
    * destinationWorkspace  目标工作空间ID
    * destinationWorkspaceName  目标工作空间名称
    *
    * @var string[]
    */
    protected static $setters = [
            'dataParam' => 'setDataParam',
            'destinationDataspace' => 'setDestinationDataspace',
            'destinationDataspaceName' => 'setDestinationDataspaceName',
            'destinationIdentityRole' => 'setDestinationIdentityRole',
            'destinationTable' => 'setDestinationTable',
            'destinationTableName' => 'setDestinationTableName',
            'destinationPipe' => 'setDestinationPipe',
            'destinationPipeName' => 'setDestinationPipeName',
            'destinationRegion' => 'setDestinationRegion',
            'destinationShipperType' => 'setDestinationShipperType',
            'destinationWorkspace' => 'setDestinationWorkspace',
            'destinationWorkspaceName' => 'setDestinationWorkspaceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataParam  数据参数
    * destinationDataspace  目标数据空间ID
    * destinationDataspaceName  目标数据空间名称
    * destinationIdentityRole  目标身份角色
    * destinationTable  目标表ID
    * destinationTableName  目标表名称
    * destinationPipe  目标管道ID
    * destinationPipeName  目标管道名称
    * destinationRegion  目标区域信息
    * destinationShipperType  目标投递类型
    * destinationWorkspace  目标工作空间ID
    * destinationWorkspaceName  目标工作空间名称
    *
    * @var string[]
    */
    protected static $getters = [
            'dataParam' => 'getDataParam',
            'destinationDataspace' => 'getDestinationDataspace',
            'destinationDataspaceName' => 'getDestinationDataspaceName',
            'destinationIdentityRole' => 'getDestinationIdentityRole',
            'destinationTable' => 'getDestinationTable',
            'destinationTableName' => 'getDestinationTableName',
            'destinationPipe' => 'getDestinationPipe',
            'destinationPipeName' => 'getDestinationPipeName',
            'destinationRegion' => 'getDestinationRegion',
            'destinationShipperType' => 'getDestinationShipperType',
            'destinationWorkspace' => 'getDestinationWorkspace',
            'destinationWorkspaceName' => 'getDestinationWorkspaceName'
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
        $this->container['dataParam'] = isset($data['dataParam']) ? $data['dataParam'] : null;
        $this->container['destinationDataspace'] = isset($data['destinationDataspace']) ? $data['destinationDataspace'] : null;
        $this->container['destinationDataspaceName'] = isset($data['destinationDataspaceName']) ? $data['destinationDataspaceName'] : null;
        $this->container['destinationIdentityRole'] = isset($data['destinationIdentityRole']) ? $data['destinationIdentityRole'] : null;
        $this->container['destinationTable'] = isset($data['destinationTable']) ? $data['destinationTable'] : null;
        $this->container['destinationTableName'] = isset($data['destinationTableName']) ? $data['destinationTableName'] : null;
        $this->container['destinationPipe'] = isset($data['destinationPipe']) ? $data['destinationPipe'] : null;
        $this->container['destinationPipeName'] = isset($data['destinationPipeName']) ? $data['destinationPipeName'] : null;
        $this->container['destinationRegion'] = isset($data['destinationRegion']) ? $data['destinationRegion'] : null;
        $this->container['destinationShipperType'] = isset($data['destinationShipperType']) ? $data['destinationShipperType'] : null;
        $this->container['destinationWorkspace'] = isset($data['destinationWorkspace']) ? $data['destinationWorkspace'] : null;
        $this->container['destinationWorkspaceName'] = isset($data['destinationWorkspaceName']) ? $data['destinationWorkspaceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['destinationDataspace']) && (mb_strlen($this->container['destinationDataspace']) > 36)) {
                $invalidProperties[] = "invalid value for 'destinationDataspace', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['destinationDataspace']) && (mb_strlen($this->container['destinationDataspace']) < 36)) {
                $invalidProperties[] = "invalid value for 'destinationDataspace', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['destinationDataspaceName']) && (mb_strlen($this->container['destinationDataspaceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'destinationDataspaceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['destinationDataspaceName']) && (mb_strlen($this->container['destinationDataspaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'destinationDataspaceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['destinationTable']) && (mb_strlen($this->container['destinationTable']) > 36)) {
                $invalidProperties[] = "invalid value for 'destinationTable', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['destinationTable']) && (mb_strlen($this->container['destinationTable']) < 36)) {
                $invalidProperties[] = "invalid value for 'destinationTable', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['destinationTableName']) && (mb_strlen($this->container['destinationTableName']) > 128)) {
                $invalidProperties[] = "invalid value for 'destinationTableName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['destinationTableName']) && (mb_strlen($this->container['destinationTableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'destinationTableName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['destinationPipe']) && (mb_strlen($this->container['destinationPipe']) > 36)) {
                $invalidProperties[] = "invalid value for 'destinationPipe', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['destinationPipe']) && (mb_strlen($this->container['destinationPipe']) < 36)) {
                $invalidProperties[] = "invalid value for 'destinationPipe', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['destinationPipeName']) && (mb_strlen($this->container['destinationPipeName']) > 128)) {
                $invalidProperties[] = "invalid value for 'destinationPipeName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['destinationPipeName']) && (mb_strlen($this->container['destinationPipeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'destinationPipeName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['destinationWorkspace']) && (mb_strlen($this->container['destinationWorkspace']) > 36)) {
                $invalidProperties[] = "invalid value for 'destinationWorkspace', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['destinationWorkspace']) && (mb_strlen($this->container['destinationWorkspace']) < 36)) {
                $invalidProperties[] = "invalid value for 'destinationWorkspace', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['destinationWorkspaceName']) && (mb_strlen($this->container['destinationWorkspaceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'destinationWorkspaceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['destinationWorkspaceName']) && (mb_strlen($this->container['destinationWorkspaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'destinationWorkspaceName', the character length must be bigger than or equal to 1.";
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
    * Gets dataParam
    *  数据参数
    *
    * @return string|null
    */
    public function getDataParam()
    {
        return $this->container['dataParam'];
    }

    /**
    * Sets dataParam
    *
    * @param string|null $dataParam 数据参数
    *
    * @return $this
    */
    public function setDataParam($dataParam)
    {
        $this->container['dataParam'] = $dataParam;
        return $this;
    }

    /**
    * Gets destinationDataspace
    *  目标数据空间ID
    *
    * @return string|null
    */
    public function getDestinationDataspace()
    {
        return $this->container['destinationDataspace'];
    }

    /**
    * Sets destinationDataspace
    *
    * @param string|null $destinationDataspace 目标数据空间ID
    *
    * @return $this
    */
    public function setDestinationDataspace($destinationDataspace)
    {
        $this->container['destinationDataspace'] = $destinationDataspace;
        return $this;
    }

    /**
    * Gets destinationDataspaceName
    *  目标数据空间名称
    *
    * @return string|null
    */
    public function getDestinationDataspaceName()
    {
        return $this->container['destinationDataspaceName'];
    }

    /**
    * Sets destinationDataspaceName
    *
    * @param string|null $destinationDataspaceName 目标数据空间名称
    *
    * @return $this
    */
    public function setDestinationDataspaceName($destinationDataspaceName)
    {
        $this->container['destinationDataspaceName'] = $destinationDataspaceName;
        return $this;
    }

    /**
    * Gets destinationIdentityRole
    *  目标身份角色
    *
    * @return string|null
    */
    public function getDestinationIdentityRole()
    {
        return $this->container['destinationIdentityRole'];
    }

    /**
    * Sets destinationIdentityRole
    *
    * @param string|null $destinationIdentityRole 目标身份角色
    *
    * @return $this
    */
    public function setDestinationIdentityRole($destinationIdentityRole)
    {
        $this->container['destinationIdentityRole'] = $destinationIdentityRole;
        return $this;
    }

    /**
    * Gets destinationTable
    *  目标表ID
    *
    * @return string|null
    */
    public function getDestinationTable()
    {
        return $this->container['destinationTable'];
    }

    /**
    * Sets destinationTable
    *
    * @param string|null $destinationTable 目标表ID
    *
    * @return $this
    */
    public function setDestinationTable($destinationTable)
    {
        $this->container['destinationTable'] = $destinationTable;
        return $this;
    }

    /**
    * Gets destinationTableName
    *  目标表名称
    *
    * @return string|null
    */
    public function getDestinationTableName()
    {
        return $this->container['destinationTableName'];
    }

    /**
    * Sets destinationTableName
    *
    * @param string|null $destinationTableName 目标表名称
    *
    * @return $this
    */
    public function setDestinationTableName($destinationTableName)
    {
        $this->container['destinationTableName'] = $destinationTableName;
        return $this;
    }

    /**
    * Gets destinationPipe
    *  目标管道ID
    *
    * @return string|null
    */
    public function getDestinationPipe()
    {
        return $this->container['destinationPipe'];
    }

    /**
    * Sets destinationPipe
    *
    * @param string|null $destinationPipe 目标管道ID
    *
    * @return $this
    */
    public function setDestinationPipe($destinationPipe)
    {
        $this->container['destinationPipe'] = $destinationPipe;
        return $this;
    }

    /**
    * Gets destinationPipeName
    *  目标管道名称
    *
    * @return string|null
    */
    public function getDestinationPipeName()
    {
        return $this->container['destinationPipeName'];
    }

    /**
    * Sets destinationPipeName
    *
    * @param string|null $destinationPipeName 目标管道名称
    *
    * @return $this
    */
    public function setDestinationPipeName($destinationPipeName)
    {
        $this->container['destinationPipeName'] = $destinationPipeName;
        return $this;
    }

    /**
    * Gets destinationRegion
    *  目标区域信息
    *
    * @return string|null
    */
    public function getDestinationRegion()
    {
        return $this->container['destinationRegion'];
    }

    /**
    * Sets destinationRegion
    *
    * @param string|null $destinationRegion 目标区域信息
    *
    * @return $this
    */
    public function setDestinationRegion($destinationRegion)
    {
        $this->container['destinationRegion'] = $destinationRegion;
        return $this;
    }

    /**
    * Gets destinationShipperType
    *  目标投递类型
    *
    * @return int|null
    */
    public function getDestinationShipperType()
    {
        return $this->container['destinationShipperType'];
    }

    /**
    * Sets destinationShipperType
    *
    * @param int|null $destinationShipperType 目标投递类型
    *
    * @return $this
    */
    public function setDestinationShipperType($destinationShipperType)
    {
        $this->container['destinationShipperType'] = $destinationShipperType;
        return $this;
    }

    /**
    * Gets destinationWorkspace
    *  目标工作空间ID
    *
    * @return string|null
    */
    public function getDestinationWorkspace()
    {
        return $this->container['destinationWorkspace'];
    }

    /**
    * Sets destinationWorkspace
    *
    * @param string|null $destinationWorkspace 目标工作空间ID
    *
    * @return $this
    */
    public function setDestinationWorkspace($destinationWorkspace)
    {
        $this->container['destinationWorkspace'] = $destinationWorkspace;
        return $this;
    }

    /**
    * Gets destinationWorkspaceName
    *  目标工作空间名称
    *
    * @return string|null
    */
    public function getDestinationWorkspaceName()
    {
        return $this->container['destinationWorkspaceName'];
    }

    /**
    * Sets destinationWorkspaceName
    *
    * @param string|null $destinationWorkspaceName 目标工作空间名称
    *
    * @return $this
    */
    public function setDestinationWorkspaceName($destinationWorkspaceName)
    {
        $this->container['destinationWorkspaceName'] = $destinationWorkspaceName;
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

