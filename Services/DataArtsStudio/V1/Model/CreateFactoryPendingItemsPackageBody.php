<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFactoryPendingItemsPackageBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFactoryPendingItemsPackageBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applyUserId  发包人id，可从 查询待发布包列表接口 获取。
    * packageName  发布包名称
    * pendingItemList  待发布包id，可从 查询待发布包列表接口 获取。
    * approverIds  审批人id，可通过管理中心-> 查询空间用户信息 接口 获取，且具有管理员或者部署者权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applyUserId' => 'string',
            'packageName' => 'string',
            'pendingItemList' => 'string[]',
            'approverIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applyUserId  发包人id，可从 查询待发布包列表接口 获取。
    * packageName  发布包名称
    * pendingItemList  待发布包id，可从 查询待发布包列表接口 获取。
    * approverIds  审批人id，可通过管理中心-> 查询空间用户信息 接口 获取，且具有管理员或者部署者权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applyUserId' => null,
        'packageName' => null,
        'pendingItemList' => null,
        'approverIds' => null
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
    * applyUserId  发包人id，可从 查询待发布包列表接口 获取。
    * packageName  发布包名称
    * pendingItemList  待发布包id，可从 查询待发布包列表接口 获取。
    * approverIds  审批人id，可通过管理中心-> 查询空间用户信息 接口 获取，且具有管理员或者部署者权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applyUserId' => 'apply_user_id',
            'packageName' => 'package_name',
            'pendingItemList' => 'pending_item_list',
            'approverIds' => 'approver_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applyUserId  发包人id，可从 查询待发布包列表接口 获取。
    * packageName  发布包名称
    * pendingItemList  待发布包id，可从 查询待发布包列表接口 获取。
    * approverIds  审批人id，可通过管理中心-> 查询空间用户信息 接口 获取，且具有管理员或者部署者权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'applyUserId' => 'setApplyUserId',
            'packageName' => 'setPackageName',
            'pendingItemList' => 'setPendingItemList',
            'approverIds' => 'setApproverIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applyUserId  发包人id，可从 查询待发布包列表接口 获取。
    * packageName  发布包名称
    * pendingItemList  待发布包id，可从 查询待发布包列表接口 获取。
    * approverIds  审批人id，可通过管理中心-> 查询空间用户信息 接口 获取，且具有管理员或者部署者权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'applyUserId' => 'getApplyUserId',
            'packageName' => 'getPackageName',
            'pendingItemList' => 'getPendingItemList',
            'approverIds' => 'getApproverIds'
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
        $this->container['applyUserId'] = isset($data['applyUserId']) ? $data['applyUserId'] : null;
        $this->container['packageName'] = isset($data['packageName']) ? $data['packageName'] : null;
        $this->container['pendingItemList'] = isset($data['pendingItemList']) ? $data['pendingItemList'] : null;
        $this->container['approverIds'] = isset($data['approverIds']) ? $data['approverIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['applyUserId'] === null) {
            $invalidProperties[] = "'applyUserId' can't be null";
        }
        if ($this->container['packageName'] === null) {
            $invalidProperties[] = "'packageName' can't be null";
        }
        if ($this->container['pendingItemList'] === null) {
            $invalidProperties[] = "'pendingItemList' can't be null";
        }
        if ($this->container['approverIds'] === null) {
            $invalidProperties[] = "'approverIds' can't be null";
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
    * Gets applyUserId
    *  发包人id，可从 查询待发布包列表接口 获取。
    *
    * @return string
    */
    public function getApplyUserId()
    {
        return $this->container['applyUserId'];
    }

    /**
    * Sets applyUserId
    *
    * @param string $applyUserId 发包人id，可从 查询待发布包列表接口 获取。
    *
    * @return $this
    */
    public function setApplyUserId($applyUserId)
    {
        $this->container['applyUserId'] = $applyUserId;
        return $this;
    }

    /**
    * Gets packageName
    *  发布包名称
    *
    * @return string
    */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
    * Sets packageName
    *
    * @param string $packageName 发布包名称
    *
    * @return $this
    */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;
        return $this;
    }

    /**
    * Gets pendingItemList
    *  待发布包id，可从 查询待发布包列表接口 获取。
    *
    * @return string[]
    */
    public function getPendingItemList()
    {
        return $this->container['pendingItemList'];
    }

    /**
    * Sets pendingItemList
    *
    * @param string[] $pendingItemList 待发布包id，可从 查询待发布包列表接口 获取。
    *
    * @return $this
    */
    public function setPendingItemList($pendingItemList)
    {
        $this->container['pendingItemList'] = $pendingItemList;
        return $this;
    }

    /**
    * Gets approverIds
    *  审批人id，可通过管理中心-> 查询空间用户信息 接口 获取，且具有管理员或者部署者权限。
    *
    * @return string[]
    */
    public function getApproverIds()
    {
        return $this->container['approverIds'];
    }

    /**
    * Sets approverIds
    *
    * @param string[] $approverIds 审批人id，可通过管理中心-> 查询空间用户信息 接口 获取，且具有管理员或者部署者权限。
    *
    * @return $this
    */
    public function setApproverIds($approverIds)
    {
        $this->container['approverIds'] = $approverIds;
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

