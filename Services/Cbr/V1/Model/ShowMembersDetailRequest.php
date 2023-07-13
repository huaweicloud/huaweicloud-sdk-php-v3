<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMembersDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMembersDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupId  备份id
    * destProjectId  接受备份共享的项目id
    * imageId  接受的共享备份副本注册的镜像id
    * status  备份共享状态
    * vaultId  目标端接受共享备份的存储库id，仅支持uuid
    * limit  每页显示的条目数量，正整数
    * marker  上一次查询最后一条的id，仅支持uuid
    * offset  偏移值，正整数
    * sort  sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupId' => 'string',
            'destProjectId' => 'string',
            'imageId' => 'string',
            'status' => 'string',
            'vaultId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'offset' => 'int',
            'sort' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupId  备份id
    * destProjectId  接受备份共享的项目id
    * imageId  接受的共享备份副本注册的镜像id
    * status  备份共享状态
    * vaultId  目标端接受共享备份的存储库id，仅支持uuid
    * limit  每页显示的条目数量，正整数
    * marker  上一次查询最后一条的id，仅支持uuid
    * offset  偏移值，正整数
    * sort  sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupId' => null,
        'destProjectId' => null,
        'imageId' => null,
        'status' => null,
        'vaultId' => null,
        'limit' => 'int32',
        'marker' => null,
        'offset' => 'int32',
        'sort' => null
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
    * backupId  备份id
    * destProjectId  接受备份共享的项目id
    * imageId  接受的共享备份副本注册的镜像id
    * status  备份共享状态
    * vaultId  目标端接受共享备份的存储库id，仅支持uuid
    * limit  每页显示的条目数量，正整数
    * marker  上一次查询最后一条的id，仅支持uuid
    * offset  偏移值，正整数
    * sort  sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupId' => 'backup_id',
            'destProjectId' => 'dest_project_id',
            'imageId' => 'image_id',
            'status' => 'status',
            'vaultId' => 'vault_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'offset' => 'offset',
            'sort' => 'sort'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupId  备份id
    * destProjectId  接受备份共享的项目id
    * imageId  接受的共享备份副本注册的镜像id
    * status  备份共享状态
    * vaultId  目标端接受共享备份的存储库id，仅支持uuid
    * limit  每页显示的条目数量，正整数
    * marker  上一次查询最后一条的id，仅支持uuid
    * offset  偏移值，正整数
    * sort  sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'backupId' => 'setBackupId',
            'destProjectId' => 'setDestProjectId',
            'imageId' => 'setImageId',
            'status' => 'setStatus',
            'vaultId' => 'setVaultId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'offset' => 'setOffset',
            'sort' => 'setSort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupId  备份id
    * destProjectId  接受备份共享的项目id
    * imageId  接受的共享备份副本注册的镜像id
    * status  备份共享状态
    * vaultId  目标端接受共享备份的存储库id，仅支持uuid
    * limit  每页显示的条目数量，正整数
    * marker  上一次查询最后一条的id，仅支持uuid
    * offset  偏移值，正整数
    * sort  sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'backupId' => 'getBackupId',
            'destProjectId' => 'getDestProjectId',
            'imageId' => 'getImageId',
            'status' => 'getStatus',
            'vaultId' => 'getVaultId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'offset' => 'getOffset',
            'sort' => 'getSort'
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
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['destProjectId'] = isset($data['destProjectId']) ? $data['destProjectId'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['backupId'] === null) {
            $invalidProperties[] = "'backupId' can't be null";
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
    * Gets backupId
    *  备份id
    *
    * @return string
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string $backupId 备份id
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets destProjectId
    *  接受备份共享的项目id
    *
    * @return string|null
    */
    public function getDestProjectId()
    {
        return $this->container['destProjectId'];
    }

    /**
    * Sets destProjectId
    *
    * @param string|null $destProjectId 接受备份共享的项目id
    *
    * @return $this
    */
    public function setDestProjectId($destProjectId)
    {
        $this->container['destProjectId'] = $destProjectId;
        return $this;
    }

    /**
    * Gets imageId
    *  接受的共享备份副本注册的镜像id
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 接受的共享备份副本注册的镜像id
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets status
    *  备份共享状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 备份共享状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets vaultId
    *  目标端接受共享备份的存储库id，仅支持uuid
    *
    * @return string|null
    */
    public function getVaultId()
    {
        return $this->container['vaultId'];
    }

    /**
    * Sets vaultId
    *
    * @param string|null $vaultId 目标端接受共享备份的存储库id，仅支持uuid
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量，正整数
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
    * @param int|null $limit 每页显示的条目数量，正整数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  上一次查询最后一条的id，仅支持uuid
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 上一次查询最后一条的id，仅支持uuid
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets offset
    *  偏移值，正整数
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
    * @param int|null $offset 偏移值，正整数
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sort
    *  sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort sort的内容为一组由逗号分隔的属性及可选排序方向组成，形如<key1>[:<direction>],<key2>[:<direction>],其中direction的取值为asc (升序) 或 desc (降序),如没有传入direction参数，默认为降序，sort内容的长度限制为255个字符。
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
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

