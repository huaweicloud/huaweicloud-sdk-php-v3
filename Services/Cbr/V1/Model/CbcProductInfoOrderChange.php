<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CbcProductInfoOrderChange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CbcProductInfoOrderChange';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productId  产品标识，通过订购询价接口获得，长度限制：1-64，只能由字母、数字、“_”、“-”组成。
    * resourceSize  资源容量大小，取值范围：10-10485760
    * resourceSizeMeasureId  资源容量度量标识，枚举值17：GB
    * resourceSpecCode  用户购买云服务产品的资源规格 Enum: [vault.backup.server.normal，vault.backup.turbo.normal, vault.backup.database.normal，vault.backup.volume.normal，vault.backup.rds.normal，vault.replication.server.normal，vault.hybrid.server.normal]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productId' => 'string',
            'resourceSize' => 'int',
            'resourceSizeMeasureId' => 'int',
            'resourceSpecCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productId  产品标识，通过订购询价接口获得，长度限制：1-64，只能由字母、数字、“_”、“-”组成。
    * resourceSize  资源容量大小，取值范围：10-10485760
    * resourceSizeMeasureId  资源容量度量标识，枚举值17：GB
    * resourceSpecCode  用户购买云服务产品的资源规格 Enum: [vault.backup.server.normal，vault.backup.turbo.normal, vault.backup.database.normal，vault.backup.volume.normal，vault.backup.rds.normal，vault.replication.server.normal，vault.hybrid.server.normal]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productId' => null,
        'resourceSize' => 'int32',
        'resourceSizeMeasureId' => 'int32',
        'resourceSpecCode' => null
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
    * productId  产品标识，通过订购询价接口获得，长度限制：1-64，只能由字母、数字、“_”、“-”组成。
    * resourceSize  资源容量大小，取值范围：10-10485760
    * resourceSizeMeasureId  资源容量度量标识，枚举值17：GB
    * resourceSpecCode  用户购买云服务产品的资源规格 Enum: [vault.backup.server.normal，vault.backup.turbo.normal, vault.backup.database.normal，vault.backup.volume.normal，vault.backup.rds.normal，vault.replication.server.normal，vault.hybrid.server.normal]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productId' => 'product_id',
            'resourceSize' => 'resource_size',
            'resourceSizeMeasureId' => 'resource_size_measure_id',
            'resourceSpecCode' => 'resource_spec_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productId  产品标识，通过订购询价接口获得，长度限制：1-64，只能由字母、数字、“_”、“-”组成。
    * resourceSize  资源容量大小，取值范围：10-10485760
    * resourceSizeMeasureId  资源容量度量标识，枚举值17：GB
    * resourceSpecCode  用户购买云服务产品的资源规格 Enum: [vault.backup.server.normal，vault.backup.turbo.normal, vault.backup.database.normal，vault.backup.volume.normal，vault.backup.rds.normal，vault.replication.server.normal，vault.hybrid.server.normal]
    *
    * @var string[]
    */
    protected static $setters = [
            'productId' => 'setProductId',
            'resourceSize' => 'setResourceSize',
            'resourceSizeMeasureId' => 'setResourceSizeMeasureId',
            'resourceSpecCode' => 'setResourceSpecCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productId  产品标识，通过订购询价接口获得，长度限制：1-64，只能由字母、数字、“_”、“-”组成。
    * resourceSize  资源容量大小，取值范围：10-10485760
    * resourceSizeMeasureId  资源容量度量标识，枚举值17：GB
    * resourceSpecCode  用户购买云服务产品的资源规格 Enum: [vault.backup.server.normal，vault.backup.turbo.normal, vault.backup.database.normal，vault.backup.volume.normal，vault.backup.rds.normal，vault.replication.server.normal，vault.hybrid.server.normal]
    *
    * @var string[]
    */
    protected static $getters = [
            'productId' => 'getProductId',
            'resourceSize' => 'getResourceSize',
            'resourceSizeMeasureId' => 'getResourceSizeMeasureId',
            'resourceSpecCode' => 'getResourceSpecCode'
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
    const RESOURCE_SPEC_CODE_VAULT_BACKUP_SERVER_NORMAL = 'vault.backup.server.normal';
    const RESOURCE_SPEC_CODE_VAULT_BACKUP_TURBO_NORMAL = 'vault.backup.turbo.normal';
    const RESOURCE_SPEC_CODE_VAULT_BACKUP_DATABASE_NORMAL = 'vault.backup.database.normal';
    const RESOURCE_SPEC_CODE_VAULT_BACKUP_VOLUME_NORMAL = 'vault.backup.volume.normal';
    const RESOURCE_SPEC_CODE_VAULT_BACKUP_RDS_NORMAL = 'vault.backup.rds.normal';
    const RESOURCE_SPEC_CODE_VAULT_REPLICATION_SERVER_NORMAL = 'vault.replication.server.normal';
    const RESOURCE_SPEC_CODE_VAULT_HYBRID_SERVER_NORMAL = 'vault.hybrid.server.normal';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceSpecCodeAllowableValues()
    {
        return [
            self::RESOURCE_SPEC_CODE_VAULT_BACKUP_SERVER_NORMAL,
            self::RESOURCE_SPEC_CODE_VAULT_BACKUP_TURBO_NORMAL,
            self::RESOURCE_SPEC_CODE_VAULT_BACKUP_DATABASE_NORMAL,
            self::RESOURCE_SPEC_CODE_VAULT_BACKUP_VOLUME_NORMAL,
            self::RESOURCE_SPEC_CODE_VAULT_BACKUP_RDS_NORMAL,
            self::RESOURCE_SPEC_CODE_VAULT_REPLICATION_SERVER_NORMAL,
            self::RESOURCE_SPEC_CODE_VAULT_HYBRID_SERVER_NORMAL,
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
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['resourceSize'] = isset($data['resourceSize']) ? $data['resourceSize'] : null;
        $this->container['resourceSizeMeasureId'] = isset($data['resourceSizeMeasureId']) ? $data['resourceSizeMeasureId'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
            if ((mb_strlen($this->container['productId']) > 64)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['productId']) < 1)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_\\-]*$/", $this->container['productId'])) {
                $invalidProperties[] = "invalid value for 'productId', must be conform to the pattern /^[a-zA-Z0-9_\\-]*$/.";
            }
        if ($this->container['resourceSize'] === null) {
            $invalidProperties[] = "'resourceSize' can't be null";
        }
            if (($this->container['resourceSize'] > 10485760)) {
                $invalidProperties[] = "invalid value for 'resourceSize', must be smaller than or equal to 10485760.";
            }
            if (($this->container['resourceSize'] < 10)) {
                $invalidProperties[] = "invalid value for 'resourceSize', must be bigger than or equal to 10.";
            }
        if ($this->container['resourceSpecCode'] === null) {
            $invalidProperties[] = "'resourceSpecCode' can't be null";
        }
            $allowedValues = $this->getResourceSpecCodeAllowableValues();
                if (!is_null($this->container['resourceSpecCode']) && !in_array($this->container['resourceSpecCode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceSpecCode', must be one of '%s'",
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
    * Gets productId
    *  产品标识，通过订购询价接口获得，长度限制：1-64，只能由字母、数字、“_”、“-”组成。
    *
    * @return string
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string $productId 产品标识，通过订购询价接口获得，长度限制：1-64，只能由字母、数字、“_”、“-”组成。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets resourceSize
    *  资源容量大小，取值范围：10-10485760
    *
    * @return int
    */
    public function getResourceSize()
    {
        return $this->container['resourceSize'];
    }

    /**
    * Sets resourceSize
    *
    * @param int $resourceSize 资源容量大小，取值范围：10-10485760
    *
    * @return $this
    */
    public function setResourceSize($resourceSize)
    {
        $this->container['resourceSize'] = $resourceSize;
        return $this;
    }

    /**
    * Gets resourceSizeMeasureId
    *  资源容量度量标识，枚举值17：GB
    *
    * @return int|null
    */
    public function getResourceSizeMeasureId()
    {
        return $this->container['resourceSizeMeasureId'];
    }

    /**
    * Sets resourceSizeMeasureId
    *
    * @param int|null $resourceSizeMeasureId 资源容量度量标识，枚举值17：GB
    *
    * @return $this
    */
    public function setResourceSizeMeasureId($resourceSizeMeasureId)
    {
        $this->container['resourceSizeMeasureId'] = $resourceSizeMeasureId;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  用户购买云服务产品的资源规格 Enum: [vault.backup.server.normal，vault.backup.turbo.normal, vault.backup.database.normal，vault.backup.volume.normal，vault.backup.rds.normal，vault.replication.server.normal，vault.hybrid.server.normal]
    *
    * @return string
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string $resourceSpecCode 用户购买云服务产品的资源规格 Enum: [vault.backup.server.normal，vault.backup.turbo.normal, vault.backup.database.normal，vault.backup.volume.normal，vault.backup.rds.normal，vault.replication.server.normal，vault.hybrid.server.normal]
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
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

