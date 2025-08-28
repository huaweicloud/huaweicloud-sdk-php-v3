<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

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
    * status  版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“SUPPORTED”，表示为老版本，但是现在还继续支持 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
    * version  若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则填空
    * updated  版本更新时间。 格式为“yyyy-mm-dd Thh:mm:ssZ”。 其中，T指某个时间的开始；Z指UTC时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\Ddm\V1\Model\LinkInfo[]',
            'status' => 'string',
            'version' => 'string',
            'updated' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  API版本号，如v1、v3。
    * links  对应API的链接信息，v1、v3版本该字段为空。
    * status  版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“SUPPORTED”，表示为老版本，但是现在还继续支持 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
    * version  若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则填空
    * updated  版本更新时间。 格式为“yyyy-mm-dd Thh:mm:ssZ”。 其中，T指某个时间的开始；Z指UTC时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'links' => null,
        'status' => null,
        'version' => null,
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
    * status  版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“SUPPORTED”，表示为老版本，但是现在还继续支持 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
    * version  若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则填空
    * updated  版本更新时间。 格式为“yyyy-mm-dd Thh:mm:ssZ”。 其中，T指某个时间的开始；Z指UTC时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'links' => 'links',
            'status' => 'status',
            'version' => 'version',
            'updated' => 'updated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  API版本号，如v1、v3。
    * links  对应API的链接信息，v1、v3版本该字段为空。
    * status  版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“SUPPORTED”，表示为老版本，但是现在还继续支持 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
    * version  若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则填空
    * updated  版本更新时间。 格式为“yyyy-mm-dd Thh:mm:ssZ”。 其中，T指某个时间的开始；Z指UTC时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'links' => 'setLinks',
            'status' => 'setStatus',
            'version' => 'setVersion',
            'updated' => 'setUpdated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  API版本号，如v1、v3。
    * links  对应API的链接信息，v1、v3版本该字段为空。
    * status  版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“SUPPORTED”，表示为老版本，但是现在还继续支持 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
    * version  若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则填空
    * updated  版本更新时间。 格式为“yyyy-mm-dd Thh:mm:ssZ”。 其中，T指某个时间的开始；Z指UTC时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'links' => 'getLinks',
            'status' => 'getStatus',
            'version' => 'getVersion',
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\LinkInfo[]
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\LinkInfo[] $links 对应API的链接信息，v1、v3版本该字段为空。
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
    *  版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“SUPPORTED”，表示为老版本，但是现在还继续支持 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
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
    * @param string $status 版本状态。 取值“CURRENT”，表示该版本为主推版本。 取值“SUPPORTED”，表示为老版本，但是现在还继续支持 取值“DEPRECATED”，表示为废弃版本，存在后续删除的可能。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets version
    *  若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则填空
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则填空
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

