<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiVersion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  API版本号，如v1、v3。
    * links  对应API的链接信息，v1、v3版本该字段为空。
    * status  版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
    * updated  版本更新时间。 格式为“yyyy-mm-dd Thh:mm:ssZ”。 其中，T指某个时间的开始；Z指UTC时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\Rds\V3\Model\LinksInfoResponse[]',
            'status' => 'string',
            'updated' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  API版本号，如v1、v3。
    * links  对应API的链接信息，v1、v3版本该字段为空。
    * status  版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
    * updated  版本更新时间。 格式为“yyyy-mm-dd Thh:mm:ssZ”。 其中，T指某个时间的开始；Z指UTC时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'links' => null,
        'status' => null,
        'updated' => null
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
    * id  API版本号，如v1、v3。
    * links  对应API的链接信息，v1、v3版本该字段为空。
    * status  版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
    * updated  版本更新时间。 格式为“yyyy-mm-dd Thh:mm:ssZ”。 其中，T指某个时间的开始；Z指UTC时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'links' => 'links',
            'status' => 'status',
            'updated' => 'updated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  API版本号，如v1、v3。
    * links  对应API的链接信息，v1、v3版本该字段为空。
    * status  版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
    * updated  版本更新时间。 格式为“yyyy-mm-dd Thh:mm:ssZ”。 其中，T指某个时间的开始；Z指UTC时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'links' => 'setLinks',
            'status' => 'setStatus',
            'updated' => 'setUpdated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  API版本号，如v1、v3。
    * links  对应API的链接信息，v1、v3版本该字段为空。
    * status  版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
    * updated  版本更新时间。 格式为“yyyy-mm-dd Thh:mm:ssZ”。 其中，T指某个时间的开始；Z指UTC时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'links' => 'getLinks',
            'status' => 'getStatus',
            'updated' => 'getUpdated'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
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
    * Gets id
    *  API版本号，如v1、v3。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id API版本号，如v1、v3。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets links
    *  对应API的链接信息，v1、v3版本该字段为空。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\LinksInfoResponse[]
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\LinksInfoResponse[] $links 对应API的链接信息，v1、v3版本该字段为空。
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets status
    *  版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updated
    *  版本更新时间。 格式为“yyyy-mm-dd Thh:mm:ssZ”。 其中，T指某个时间的开始；Z指UTC时间。
    *
    * @return string
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string $updated 版本更新时间。 格式为“yyyy-mm-dd Thh:mm:ssZ”。 其中，T指某个时间的开始；Z指UTC时间。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
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

