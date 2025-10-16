<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ArticlePropertiesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ArticlePropertiesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * destinationObjectName  目标对象名称。
    * destinationObjectOwner  目标对象命名空间。
    * insertDeliveryFormat  插入交付格式。
    * insertStoredProcedure  插入存储过程。插入交付格式填call_procedure时该项必填。
    * updateDeliveryFormat  更新交付格式。
    * updateStoredProcedure  更新存储过程。更新交付格式填(m/x/s)call_procedure时该项必填。
    * deleteDeliveryFormat  删除交付格式。
    * deleteStoredProcedure  删除存储过程。删除交付格式填(x)call_procedure时该项必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'destinationObjectName' => 'string',
            'destinationObjectOwner' => 'string',
            'insertDeliveryFormat' => 'string',
            'insertStoredProcedure' => 'string',
            'updateDeliveryFormat' => 'string',
            'updateStoredProcedure' => 'string',
            'deleteDeliveryFormat' => 'string',
            'deleteStoredProcedure' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * destinationObjectName  目标对象名称。
    * destinationObjectOwner  目标对象命名空间。
    * insertDeliveryFormat  插入交付格式。
    * insertStoredProcedure  插入存储过程。插入交付格式填call_procedure时该项必填。
    * updateDeliveryFormat  更新交付格式。
    * updateStoredProcedure  更新存储过程。更新交付格式填(m/x/s)call_procedure时该项必填。
    * deleteDeliveryFormat  删除交付格式。
    * deleteStoredProcedure  删除存储过程。删除交付格式填(x)call_procedure时该项必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'destinationObjectName' => null,
        'destinationObjectOwner' => null,
        'insertDeliveryFormat' => null,
        'insertStoredProcedure' => null,
        'updateDeliveryFormat' => null,
        'updateStoredProcedure' => null,
        'deleteDeliveryFormat' => null,
        'deleteStoredProcedure' => null
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
    * destinationObjectName  目标对象名称。
    * destinationObjectOwner  目标对象命名空间。
    * insertDeliveryFormat  插入交付格式。
    * insertStoredProcedure  插入存储过程。插入交付格式填call_procedure时该项必填。
    * updateDeliveryFormat  更新交付格式。
    * updateStoredProcedure  更新存储过程。更新交付格式填(m/x/s)call_procedure时该项必填。
    * deleteDeliveryFormat  删除交付格式。
    * deleteStoredProcedure  删除存储过程。删除交付格式填(x)call_procedure时该项必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'destinationObjectName' => 'destination_object_name',
            'destinationObjectOwner' => 'destination_object_owner',
            'insertDeliveryFormat' => 'insert_delivery_format',
            'insertStoredProcedure' => 'insert_stored_procedure',
            'updateDeliveryFormat' => 'update_delivery_format',
            'updateStoredProcedure' => 'update_stored_procedure',
            'deleteDeliveryFormat' => 'delete_delivery_format',
            'deleteStoredProcedure' => 'delete_stored_procedure'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * destinationObjectName  目标对象名称。
    * destinationObjectOwner  目标对象命名空间。
    * insertDeliveryFormat  插入交付格式。
    * insertStoredProcedure  插入存储过程。插入交付格式填call_procedure时该项必填。
    * updateDeliveryFormat  更新交付格式。
    * updateStoredProcedure  更新存储过程。更新交付格式填(m/x/s)call_procedure时该项必填。
    * deleteDeliveryFormat  删除交付格式。
    * deleteStoredProcedure  删除存储过程。删除交付格式填(x)call_procedure时该项必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'destinationObjectName' => 'setDestinationObjectName',
            'destinationObjectOwner' => 'setDestinationObjectOwner',
            'insertDeliveryFormat' => 'setInsertDeliveryFormat',
            'insertStoredProcedure' => 'setInsertStoredProcedure',
            'updateDeliveryFormat' => 'setUpdateDeliveryFormat',
            'updateStoredProcedure' => 'setUpdateStoredProcedure',
            'deleteDeliveryFormat' => 'setDeleteDeliveryFormat',
            'deleteStoredProcedure' => 'setDeleteStoredProcedure'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * destinationObjectName  目标对象名称。
    * destinationObjectOwner  目标对象命名空间。
    * insertDeliveryFormat  插入交付格式。
    * insertStoredProcedure  插入存储过程。插入交付格式填call_procedure时该项必填。
    * updateDeliveryFormat  更新交付格式。
    * updateStoredProcedure  更新存储过程。更新交付格式填(m/x/s)call_procedure时该项必填。
    * deleteDeliveryFormat  删除交付格式。
    * deleteStoredProcedure  删除存储过程。删除交付格式填(x)call_procedure时该项必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'destinationObjectName' => 'getDestinationObjectName',
            'destinationObjectOwner' => 'getDestinationObjectOwner',
            'insertDeliveryFormat' => 'getInsertDeliveryFormat',
            'insertStoredProcedure' => 'getInsertStoredProcedure',
            'updateDeliveryFormat' => 'getUpdateDeliveryFormat',
            'updateStoredProcedure' => 'getUpdateStoredProcedure',
            'deleteDeliveryFormat' => 'getDeleteDeliveryFormat',
            'deleteStoredProcedure' => 'getDeleteStoredProcedure'
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
    const INSERT_DELIVERY_FORMAT_DO_NOT_INSERT = 'do_not_insert';
    const INSERT_DELIVERY_FORMAT_INSERT = 'insert';
    const INSERT_DELIVERY_FORMAT_INSERT_WITHOUT_COLUMN_LIST = 'insert_without_column_list';
    const INSERT_DELIVERY_FORMAT_CALL_PROCEDURE = 'call_procedure';
    const UPDATE_DELIVERY_FORMAT_DO_NOT_UPDATE = 'do_not_update';
    const UPDATE_DELIVERY_FORMAT_UPDATE = 'update';
    const UPDATE_DELIVERY_FORMAT_CALL_PROCEDURE = 'call_procedure';
    const UPDATE_DELIVERY_FORMAT_MCALL_PROCEDURE = 'mcall_procedure';
    const UPDATE_DELIVERY_FORMAT_XCALL_PROCEDURE = 'xcall_procedure';
    const UPDATE_DELIVERY_FORMAT_SCALL_PROCEDURE = 'scall_procedure';
    const DELETE_DELIVERY_FORMAT_DO_NOT_DELETE = 'do_not_delete';
    const DELETE_DELIVERY_FORMAT_DELETE = 'delete';
    const DELETE_DELIVERY_FORMAT_CALL_PROCEDURE = 'call_procedure';
    const DELETE_DELIVERY_FORMAT_XCALL_PROCEDURE = 'xcall_procedure';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInsertDeliveryFormatAllowableValues()
    {
        return [
            self::INSERT_DELIVERY_FORMAT_DO_NOT_INSERT,
            self::INSERT_DELIVERY_FORMAT_INSERT,
            self::INSERT_DELIVERY_FORMAT_INSERT_WITHOUT_COLUMN_LIST,
            self::INSERT_DELIVERY_FORMAT_CALL_PROCEDURE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUpdateDeliveryFormatAllowableValues()
    {
        return [
            self::UPDATE_DELIVERY_FORMAT_DO_NOT_UPDATE,
            self::UPDATE_DELIVERY_FORMAT_UPDATE,
            self::UPDATE_DELIVERY_FORMAT_CALL_PROCEDURE,
            self::UPDATE_DELIVERY_FORMAT_MCALL_PROCEDURE,
            self::UPDATE_DELIVERY_FORMAT_XCALL_PROCEDURE,
            self::UPDATE_DELIVERY_FORMAT_SCALL_PROCEDURE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeleteDeliveryFormatAllowableValues()
    {
        return [
            self::DELETE_DELIVERY_FORMAT_DO_NOT_DELETE,
            self::DELETE_DELIVERY_FORMAT_DELETE,
            self::DELETE_DELIVERY_FORMAT_CALL_PROCEDURE,
            self::DELETE_DELIVERY_FORMAT_XCALL_PROCEDURE,
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
        $this->container['destinationObjectName'] = isset($data['destinationObjectName']) ? $data['destinationObjectName'] : null;
        $this->container['destinationObjectOwner'] = isset($data['destinationObjectOwner']) ? $data['destinationObjectOwner'] : null;
        $this->container['insertDeliveryFormat'] = isset($data['insertDeliveryFormat']) ? $data['insertDeliveryFormat'] : null;
        $this->container['insertStoredProcedure'] = isset($data['insertStoredProcedure']) ? $data['insertStoredProcedure'] : null;
        $this->container['updateDeliveryFormat'] = isset($data['updateDeliveryFormat']) ? $data['updateDeliveryFormat'] : null;
        $this->container['updateStoredProcedure'] = isset($data['updateStoredProcedure']) ? $data['updateStoredProcedure'] : null;
        $this->container['deleteDeliveryFormat'] = isset($data['deleteDeliveryFormat']) ? $data['deleteDeliveryFormat'] : null;
        $this->container['deleteStoredProcedure'] = isset($data['deleteStoredProcedure']) ? $data['deleteStoredProcedure'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getInsertDeliveryFormatAllowableValues();
                if (!is_null($this->container['insertDeliveryFormat']) && !in_array($this->container['insertDeliveryFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'insertDeliveryFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getUpdateDeliveryFormatAllowableValues();
                if (!is_null($this->container['updateDeliveryFormat']) && !in_array($this->container['updateDeliveryFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'updateDeliveryFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDeleteDeliveryFormatAllowableValues();
                if (!is_null($this->container['deleteDeliveryFormat']) && !in_array($this->container['deleteDeliveryFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deleteDeliveryFormat', must be one of '%s'",
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
    * Gets destinationObjectName
    *  目标对象名称。
    *
    * @return string|null
    */
    public function getDestinationObjectName()
    {
        return $this->container['destinationObjectName'];
    }

    /**
    * Sets destinationObjectName
    *
    * @param string|null $destinationObjectName 目标对象名称。
    *
    * @return $this
    */
    public function setDestinationObjectName($destinationObjectName)
    {
        $this->container['destinationObjectName'] = $destinationObjectName;
        return $this;
    }

    /**
    * Gets destinationObjectOwner
    *  目标对象命名空间。
    *
    * @return string|null
    */
    public function getDestinationObjectOwner()
    {
        return $this->container['destinationObjectOwner'];
    }

    /**
    * Sets destinationObjectOwner
    *
    * @param string|null $destinationObjectOwner 目标对象命名空间。
    *
    * @return $this
    */
    public function setDestinationObjectOwner($destinationObjectOwner)
    {
        $this->container['destinationObjectOwner'] = $destinationObjectOwner;
        return $this;
    }

    /**
    * Gets insertDeliveryFormat
    *  插入交付格式。
    *
    * @return string|null
    */
    public function getInsertDeliveryFormat()
    {
        return $this->container['insertDeliveryFormat'];
    }

    /**
    * Sets insertDeliveryFormat
    *
    * @param string|null $insertDeliveryFormat 插入交付格式。
    *
    * @return $this
    */
    public function setInsertDeliveryFormat($insertDeliveryFormat)
    {
        $this->container['insertDeliveryFormat'] = $insertDeliveryFormat;
        return $this;
    }

    /**
    * Gets insertStoredProcedure
    *  插入存储过程。插入交付格式填call_procedure时该项必填。
    *
    * @return string|null
    */
    public function getInsertStoredProcedure()
    {
        return $this->container['insertStoredProcedure'];
    }

    /**
    * Sets insertStoredProcedure
    *
    * @param string|null $insertStoredProcedure 插入存储过程。插入交付格式填call_procedure时该项必填。
    *
    * @return $this
    */
    public function setInsertStoredProcedure($insertStoredProcedure)
    {
        $this->container['insertStoredProcedure'] = $insertStoredProcedure;
        return $this;
    }

    /**
    * Gets updateDeliveryFormat
    *  更新交付格式。
    *
    * @return string|null
    */
    public function getUpdateDeliveryFormat()
    {
        return $this->container['updateDeliveryFormat'];
    }

    /**
    * Sets updateDeliveryFormat
    *
    * @param string|null $updateDeliveryFormat 更新交付格式。
    *
    * @return $this
    */
    public function setUpdateDeliveryFormat($updateDeliveryFormat)
    {
        $this->container['updateDeliveryFormat'] = $updateDeliveryFormat;
        return $this;
    }

    /**
    * Gets updateStoredProcedure
    *  更新存储过程。更新交付格式填(m/x/s)call_procedure时该项必填。
    *
    * @return string|null
    */
    public function getUpdateStoredProcedure()
    {
        return $this->container['updateStoredProcedure'];
    }

    /**
    * Sets updateStoredProcedure
    *
    * @param string|null $updateStoredProcedure 更新存储过程。更新交付格式填(m/x/s)call_procedure时该项必填。
    *
    * @return $this
    */
    public function setUpdateStoredProcedure($updateStoredProcedure)
    {
        $this->container['updateStoredProcedure'] = $updateStoredProcedure;
        return $this;
    }

    /**
    * Gets deleteDeliveryFormat
    *  删除交付格式。
    *
    * @return string|null
    */
    public function getDeleteDeliveryFormat()
    {
        return $this->container['deleteDeliveryFormat'];
    }

    /**
    * Sets deleteDeliveryFormat
    *
    * @param string|null $deleteDeliveryFormat 删除交付格式。
    *
    * @return $this
    */
    public function setDeleteDeliveryFormat($deleteDeliveryFormat)
    {
        $this->container['deleteDeliveryFormat'] = $deleteDeliveryFormat;
        return $this;
    }

    /**
    * Gets deleteStoredProcedure
    *  删除存储过程。删除交付格式填(x)call_procedure时该项必填。
    *
    * @return string|null
    */
    public function getDeleteStoredProcedure()
    {
        return $this->container['deleteStoredProcedure'];
    }

    /**
    * Sets deleteStoredProcedure
    *
    * @param string|null $deleteStoredProcedure 删除存储过程。删除交付格式填(x)call_procedure时该项必填。
    *
    * @return $this
    */
    public function setDeleteStoredProcedure($deleteStoredProcedure)
    {
        $this->container['deleteStoredProcedure'] = $deleteStoredProcedure;
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

