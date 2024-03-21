<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityDatasourceUrlsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityDatasourceUrlsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * clusterId  集群id
    * datasourceType  数据源类型,HIVE
    * parentPermissionSetId  父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为父权限集ID时，则基于父权限集中的权限查询
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'clusterId' => 'string',
            'datasourceType' => 'string',
            'parentPermissionSetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * clusterId  集群id
    * datasourceType  数据源类型,HIVE
    * parentPermissionSetId  父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为父权限集ID时，则基于父权限集中的权限查询
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'clusterId' => null,
        'datasourceType' => null,
        'parentPermissionSetId' => null
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
    * clusterId  集群id
    * datasourceType  数据源类型,HIVE
    * parentPermissionSetId  父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为父权限集ID时，则基于父权限集中的权限查询
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'clusterId' => 'cluster_id',
            'datasourceType' => 'datasource_type',
            'parentPermissionSetId' => 'parent_permission_set_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * clusterId  集群id
    * datasourceType  数据源类型,HIVE
    * parentPermissionSetId  父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为父权限集ID时，则基于父权限集中的权限查询
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'clusterId' => 'setClusterId',
            'datasourceType' => 'setDatasourceType',
            'parentPermissionSetId' => 'setParentPermissionSetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * clusterId  集群id
    * datasourceType  数据源类型,HIVE
    * parentPermissionSetId  父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为父权限集ID时，则基于父权限集中的权限查询
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'clusterId' => 'getClusterId',
            'datasourceType' => 'getDatasourceType',
            'parentPermissionSetId' => 'getParentPermissionSetId'
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
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatasourceTypeAllowableValues()
    {
        return [
            self::DATASOURCE_TYPE_HIVE,
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['parentPermissionSetId'] = isset($data['parentPermissionSetId']) ? $data['parentPermissionSetId'] : null;
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
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getDatasourceTypeAllowableValues();
                if (!is_null($this->container['datasourceType']) && !in_array($this->container['datasourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datasourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['parentPermissionSetId']) && (mb_strlen($this->container['parentPermissionSetId']) > 128)) {
                $invalidProperties[] = "invalid value for 'parentPermissionSetId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['parentPermissionSetId']) && (mb_strlen($this->container['parentPermissionSetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentPermissionSetId', the character length must be bigger than or equal to 1.";
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
    * Gets clusterId
    *  集群id
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型,HIVE
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
    * @param string|null $datasourceType 数据源类型,HIVE
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets parentPermissionSetId
    *  父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为父权限集ID时，则基于父权限集中的权限查询
    *
    * @return string|null
    */
    public function getParentPermissionSetId()
    {
        return $this->container['parentPermissionSetId'];
    }

    /**
    * Sets parentPermissionSetId
    *
    * @param string|null $parentPermissionSetId 父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为父权限集ID时，则基于父权限集中的权限查询
    *
    * @return $this
    */
    public function setParentPermissionSetId($parentPermissionSetId)
    {
        $this->container['parentPermissionSetId'] = $parentPermissionSetId;
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

