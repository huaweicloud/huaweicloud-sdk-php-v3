<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListShareFilesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListShareFilesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~50（默认值为50）。
    * serverIds  云手机服务器ID列表，多个服务器ID用逗号（,）分隔。
    * path  待查询的目录名称， 可以包含大小写字母、数字、“.”、“+”、“-”、“_”、“/”、\"=\"；必须以“/”开头，并且不能只包含“/”；不能包含“../”、“//”等。 示例：/data/data
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'serverIds' => 'string',
            'path' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~50（默认值为50）。
    * serverIds  云手机服务器ID列表，多个服务器ID用逗号（,）分隔。
    * path  待查询的目录名称， 可以包含大小写字母、数字、“.”、“+”、“-”、“_”、“/”、\"=\"；必须以“/”开头，并且不能只包含“/”；不能包含“../”、“//”等。 示例：/data/data
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => null,
        'limit' => null,
        'serverIds' => null,
        'path' => null
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
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~50（默认值为50）。
    * serverIds  云手机服务器ID列表，多个服务器ID用逗号（,）分隔。
    * path  待查询的目录名称， 可以包含大小写字母、数字、“.”、“+”、“-”、“_”、“/”、\"=\"；必须以“/”开头，并且不能只包含“/”；不能包含“../”、“//”等。 示例：/data/data
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'serverIds' => 'server_ids',
            'path' => 'path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~50（默认值为50）。
    * serverIds  云手机服务器ID列表，多个服务器ID用逗号（,）分隔。
    * path  待查询的目录名称， 可以包含大小写字母、数字、“.”、“+”、“-”、“_”、“/”、\"=\"；必须以“/”开头，并且不能只包含“/”；不能包含“../”、“//”等。 示例：/data/data
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'serverIds' => 'setServerIds',
            'path' => 'setPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~50（默认值为50）。
    * serverIds  云手机服务器ID列表，多个服务器ID用逗号（,）分隔。
    * path  待查询的目录名称， 可以包含大小写字母、数字、“.”、“+”、“-”、“_”、“/”、\"=\"；必须以“/”开头，并且不能只包含“/”；不能包含“../”、“//”等。 示例：/data/data
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'serverIds' => 'getServerIds',
            'path' => 'getPath'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['serverIds'] = isset($data['serverIds']) ? $data['serverIds'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 8096)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 8096)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
        if ($this->container['serverIds'] === null) {
            $invalidProperties[] = "'serverIds' can't be null";
        }
            if ((mb_strlen($this->container['serverIds']) > 8096)) {
                $invalidProperties[] = "invalid value for 'serverIds', the character length must be smaller than or equal to 8096.";
            }
            if ((mb_strlen($this->container['serverIds']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverIds', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
            if ((mb_strlen($this->container['path']) > 8096)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 8096.";
            }
            if ((mb_strlen($this->container['path']) < 0)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 0.";
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
    * Gets offset
    *  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
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
    * @param int|null $offset 偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的资源个数。取值范围：1~50（默认值为50）。
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
    * @param int|null $limit 每页返回的资源个数。取值范围：1~50（默认值为50）。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets serverIds
    *  云手机服务器ID列表，多个服务器ID用逗号（,）分隔。
    *
    * @return string
    */
    public function getServerIds()
    {
        return $this->container['serverIds'];
    }

    /**
    * Sets serverIds
    *
    * @param string $serverIds 云手机服务器ID列表，多个服务器ID用逗号（,）分隔。
    *
    * @return $this
    */
    public function setServerIds($serverIds)
    {
        $this->container['serverIds'] = $serverIds;
        return $this;
    }

    /**
    * Gets path
    *  待查询的目录名称， 可以包含大小写字母、数字、“.”、“+”、“-”、“_”、“/”、\"=\"；必须以“/”开头，并且不能只包含“/”；不能包含“../”、“//”等。 示例：/data/data
    *
    * @return string
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string $path 待查询的目录名称， 可以包含大小写字母、数字、“.”、“+”、“-”、“_”、“/”、\"=\"；必须以“/”开头，并且不能只包含“/”；不能包含“../”、“//”等。 示例：/data/data
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
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

