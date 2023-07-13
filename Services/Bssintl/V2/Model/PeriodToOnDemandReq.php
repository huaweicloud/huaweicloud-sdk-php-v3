<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeriodToOnDemandReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PeriodToOnDemandReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operation  设置或取消包年/包月资源到期转按需的操作。 SET_UP：设置CANCEL：取消
    * resourceIds  资源ID。 您可以调用“查询客户包年/包月资源列表”接口获取资源ID。 此处只支持设置主资源ID，最多可设置100个资源ID。设置后，主资源及其对应的从资源将一起转为按需资源。 请根据“查询客户包年/包月资源列表”接口响应参数中的“is_main_resource”参数来标识资源是否为主资源。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operation' => 'string',
            'resourceIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operation  设置或取消包年/包月资源到期转按需的操作。 SET_UP：设置CANCEL：取消
    * resourceIds  资源ID。 您可以调用“查询客户包年/包月资源列表”接口获取资源ID。 此处只支持设置主资源ID，最多可设置100个资源ID。设置后，主资源及其对应的从资源将一起转为按需资源。 请根据“查询客户包年/包月资源列表”接口响应参数中的“is_main_resource”参数来标识资源是否为主资源。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operation' => null,
        'resourceIds' => null
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
    * operation  设置或取消包年/包月资源到期转按需的操作。 SET_UP：设置CANCEL：取消
    * resourceIds  资源ID。 您可以调用“查询客户包年/包月资源列表”接口获取资源ID。 此处只支持设置主资源ID，最多可设置100个资源ID。设置后，主资源及其对应的从资源将一起转为按需资源。 请根据“查询客户包年/包月资源列表”接口响应参数中的“is_main_resource”参数来标识资源是否为主资源。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operation' => 'operation',
            'resourceIds' => 'resource_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operation  设置或取消包年/包月资源到期转按需的操作。 SET_UP：设置CANCEL：取消
    * resourceIds  资源ID。 您可以调用“查询客户包年/包月资源列表”接口获取资源ID。 此处只支持设置主资源ID，最多可设置100个资源ID。设置后，主资源及其对应的从资源将一起转为按需资源。 请根据“查询客户包年/包月资源列表”接口响应参数中的“is_main_resource”参数来标识资源是否为主资源。
    *
    * @var string[]
    */
    protected static $setters = [
            'operation' => 'setOperation',
            'resourceIds' => 'setResourceIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operation  设置或取消包年/包月资源到期转按需的操作。 SET_UP：设置CANCEL：取消
    * resourceIds  资源ID。 您可以调用“查询客户包年/包月资源列表”接口获取资源ID。 此处只支持设置主资源ID，最多可设置100个资源ID。设置后，主资源及其对应的从资源将一起转为按需资源。 请根据“查询客户包年/包月资源列表”接口响应参数中的“is_main_resource”参数来标识资源是否为主资源。
    *
    * @var string[]
    */
    protected static $getters = [
            'operation' => 'getOperation',
            'resourceIds' => 'getResourceIds'
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
        }
            if ((mb_strlen($this->container['operation']) > 64)) {
                $invalidProperties[] = "invalid value for 'operation', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['operation']) < 1)) {
                $invalidProperties[] = "invalid value for 'operation', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourceIds'] === null) {
            $invalidProperties[] = "'resourceIds' can't be null";
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
    * Gets operation
    *  设置或取消包年/包月资源到期转按需的操作。 SET_UP：设置CANCEL：取消
    *
    * @return string
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string $operation 设置或取消包年/包月资源到期转按需的操作。 SET_UP：设置CANCEL：取消
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets resourceIds
    *  资源ID。 您可以调用“查询客户包年/包月资源列表”接口获取资源ID。 此处只支持设置主资源ID，最多可设置100个资源ID。设置后，主资源及其对应的从资源将一起转为按需资源。 请根据“查询客户包年/包月资源列表”接口响应参数中的“is_main_resource”参数来标识资源是否为主资源。
    *
    * @return string[]
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[] $resourceIds 资源ID。 您可以调用“查询客户包年/包月资源列表”接口获取资源ID。 此处只支持设置主资源ID，最多可设置100个资源ID。设置后，主资源及其对应的从资源将一起转为按需资源。 请根据“查询客户包年/包月资源列表”接口响应参数中的“is_main_resource”参数来标识资源是否为主资源。
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
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

