<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SingleBackgroundTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SingleBackgroundTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  后台任务ID
    * name  后台任务名，目前支持以下取值：  ChangeInstanceSpec：变更规格  BindEip：开启公网访问  UnBindEip：关闭公网访问  AddReplica：添加副本  DelReplica：删除副本  AddWhitelist：设置IP白名单  UpdatePort：修改端口  RemoveIpFromDns：域名摘除IP
    * details  details
    * userName  用户名
    * userId  用户ID
    * params  任务相关参数
    * status  任务状态
    * createdAt  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * updatedAt  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * enableShow  是否有详细任务进展，可以展开查看
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'details' => '\HuaweiCloud\SDK\Dcs\V2\Model\DetailsBody',
            'userName' => 'string',
            'userId' => 'string',
            'params' => 'string',
            'status' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'enableShow' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  后台任务ID
    * name  后台任务名，目前支持以下取值：  ChangeInstanceSpec：变更规格  BindEip：开启公网访问  UnBindEip：关闭公网访问  AddReplica：添加副本  DelReplica：删除副本  AddWhitelist：设置IP白名单  UpdatePort：修改端口  RemoveIpFromDns：域名摘除IP
    * details  details
    * userName  用户名
    * userId  用户ID
    * params  任务相关参数
    * status  任务状态
    * createdAt  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * updatedAt  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * enableShow  是否有详细任务进展，可以展开查看
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'details' => null,
        'userName' => null,
        'userId' => null,
        'params' => null,
        'status' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'enableShow' => null
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
    * id  后台任务ID
    * name  后台任务名，目前支持以下取值：  ChangeInstanceSpec：变更规格  BindEip：开启公网访问  UnBindEip：关闭公网访问  AddReplica：添加副本  DelReplica：删除副本  AddWhitelist：设置IP白名单  UpdatePort：修改端口  RemoveIpFromDns：域名摘除IP
    * details  details
    * userName  用户名
    * userId  用户ID
    * params  任务相关参数
    * status  任务状态
    * createdAt  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * updatedAt  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * enableShow  是否有详细任务进展，可以展开查看
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'details' => 'details',
            'userName' => 'user_name',
            'userId' => 'user_id',
            'params' => 'params',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'enableShow' => 'enable_show'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  后台任务ID
    * name  后台任务名，目前支持以下取值：  ChangeInstanceSpec：变更规格  BindEip：开启公网访问  UnBindEip：关闭公网访问  AddReplica：添加副本  DelReplica：删除副本  AddWhitelist：设置IP白名单  UpdatePort：修改端口  RemoveIpFromDns：域名摘除IP
    * details  details
    * userName  用户名
    * userId  用户ID
    * params  任务相关参数
    * status  任务状态
    * createdAt  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * updatedAt  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * enableShow  是否有详细任务进展，可以展开查看
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'details' => 'setDetails',
            'userName' => 'setUserName',
            'userId' => 'setUserId',
            'params' => 'setParams',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'enableShow' => 'setEnableShow'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  后台任务ID
    * name  后台任务名，目前支持以下取值：  ChangeInstanceSpec：变更规格  BindEip：开启公网访问  UnBindEip：关闭公网访问  AddReplica：添加副本  DelReplica：删除副本  AddWhitelist：设置IP白名单  UpdatePort：修改端口  RemoveIpFromDns：域名摘除IP
    * details  details
    * userName  用户名
    * userId  用户ID
    * params  任务相关参数
    * status  任务状态
    * createdAt  任务启动时间，格式为2020-06-17T07:38:42.503Z
    * updatedAt  任务结束时间，格式为2020-06-17T07:38:42.503Z
    * enableShow  是否有详细任务进展，可以展开查看
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'details' => 'getDetails',
            'userName' => 'getUserName',
            'userId' => 'getUserId',
            'params' => 'getParams',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'enableShow' => 'getEnableShow'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['enableShow'] = isset($data['enableShow']) ? $data['enableShow'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  后台任务ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 后台任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  后台任务名，目前支持以下取值：  ChangeInstanceSpec：变更规格  BindEip：开启公网访问  UnBindEip：关闭公网访问  AddReplica：添加副本  DelReplica：删除副本  AddWhitelist：设置IP白名单  UpdatePort：修改端口  RemoveIpFromDns：域名摘除IP
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 后台任务名，目前支持以下取值：  ChangeInstanceSpec：变更规格  BindEip：开启公网访问  UnBindEip：关闭公网访问  AddReplica：添加副本  DelReplica：删除副本  AddWhitelist：设置IP白名单  UpdatePort：修改端口  RemoveIpFromDns：域名摘除IP
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets details
    *  details
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\DetailsBody|null
    */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
    * Sets details
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\DetailsBody|null $details details
    *
    * @return $this
    */
    public function setDetails($details)
    {
        $this->container['details'] = $details;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
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
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets userId
    *  用户ID
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets params
    *  任务相关参数
    *
    * @return string|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param string|null $params 任务相关参数
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
        return $this;
    }

    /**
    * Gets status
    *  任务状态
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
    * @param string|null $status 任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  任务启动时间，格式为2020-06-17T07:38:42.503Z
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 任务启动时间，格式为2020-06-17T07:38:42.503Z
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  任务结束时间，格式为2020-06-17T07:38:42.503Z
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 任务结束时间，格式为2020-06-17T07:38:42.503Z
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets enableShow
    *  是否有详细任务进展，可以展开查看
    *
    * @return bool|null
    */
    public function getEnableShow()
    {
        return $this->container['enableShow'];
    }

    /**
    * Sets enableShow
    *
    * @param bool|null $enableShow 是否有详细任务进展，可以展开查看
    *
    * @return $this
    */
    public function setEnableShow($enableShow)
    {
        $this->container['enableShow'] = $enableShow;
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

