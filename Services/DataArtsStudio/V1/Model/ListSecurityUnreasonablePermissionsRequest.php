<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityUnreasonablePermissionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityUnreasonablePermissionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * diagnoseId  诊断任务id，通过调用查询数据权限控制模块诊断结果接口获取。
    * userName  用户名。
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'diagnoseId' => 'string',
            'userName' => 'string',
            'datasourceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * diagnoseId  诊断任务id，通过调用查询数据权限控制模块诊断结果接口获取。
    * userName  用户名。
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'limit' => null,
        'offset' => null,
        'diagnoseId' => null,
        'userName' => null,
        'datasourceType' => null
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
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * diagnoseId  诊断任务id，通过调用查询数据权限控制模块诊断结果接口获取。
    * userName  用户名。
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'limit' => 'limit',
            'offset' => 'offset',
            'diagnoseId' => 'diagnose_id',
            'userName' => 'user_name',
            'datasourceType' => 'datasource_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * diagnoseId  诊断任务id，通过调用查询数据权限控制模块诊断结果接口获取。
    * userName  用户名。
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'diagnoseId' => 'setDiagnoseId',
            'userName' => 'setUserName',
            'datasourceType' => 'setDatasourceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * diagnoseId  诊断任务id，通过调用查询数据权限控制模块诊断结果接口获取。
    * userName  用户名。
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'diagnoseId' => 'getDiagnoseId',
            'userName' => 'getUserName',
            'datasourceType' => 'getDatasourceType'
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
    const DATASOURCE_TYPE_HIVE = 'HIVE';
    const DATASOURCE_TYPE_DWS = 'DWS';
    const DATASOURCE_TYPE_DLI = 'DLI';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatasourceTypeAllowableValues()
    {
        return [
            self::DATASOURCE_TYPE_HIVE,
            self::DATASOURCE_TYPE_DWS,
            self::DATASOURCE_TYPE_DLI,
        ];
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['diagnoseId'] = isset($data['diagnoseId']) ? $data['diagnoseId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 99999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['diagnoseId'] === null) {
            $invalidProperties[] = "'diagnoseId' can't be null";
        }
            if ((mb_strlen($this->container['diagnoseId']) > 128)) {
                $invalidProperties[] = "invalid value for 'diagnoseId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['diagnoseId']) < 1)) {
                $invalidProperties[] = "invalid value for 'diagnoseId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getDatasourceTypeAllowableValues();
                if (!is_null($this->container['datasourceType']) && !in_array($this->container['datasourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datasourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets workspace
    *  DataArts Studio工作空间ID
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace DataArts Studio工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets limit
    *  limit
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  offset
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets diagnoseId
    *  诊断任务id，通过调用查询数据权限控制模块诊断结果接口获取。
    *
    * @return string
    */
    public function getDiagnoseId()
    {
        return $this->container['diagnoseId'];
    }

    /**
    * Sets diagnoseId
    *
    * @param string $diagnoseId 诊断任务id，通过调用查询数据权限控制模块诊断结果接口获取。
    *
    * @return $this
    */
    public function setDiagnoseId($diagnoseId)
    {
        $this->container['diagnoseId'] = $diagnoseId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    *
    * @return string|null
    */
    public function getDatasourceType()
    {
        return $this->container['datasourceType'];
    }

    /**
    * Sets datasourceType
    *
    * @param string|null $datasourceType 数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
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

