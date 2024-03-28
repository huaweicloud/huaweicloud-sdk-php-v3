<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegisterAuthorizedQueueRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegisterAuthorizedQueueRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queueName  队列名称。
    * userName  被赋权用户名称。给该用户赋使用队列的权限，回收其使用权限，或者更新其使用权限。
    * action  指定赋权或回收。值为：grant，revoke或update。当用户同时拥有grant和revoke权限的时候才有权限使用update操作。 grant：赋权。 revoke：回收权限。 update：清空原来的所有权限，赋予本次提供的权限数组中的权限。
    * privileges  待赋权、回收或更新的权限列表。可操作的权限可以是以下三种权限中的一种或多种。 SUBMIT_JOB：提交作业 CANCEL_JOB ：取消作业 DROP_QUEUE ：删除队列 说明： 若需更新的权限列表为空，则表示回收用户在该队列的所有权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queueName' => 'string',
            'userName' => 'string',
            'action' => 'string',
            'privileges' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queueName  队列名称。
    * userName  被赋权用户名称。给该用户赋使用队列的权限，回收其使用权限，或者更新其使用权限。
    * action  指定赋权或回收。值为：grant，revoke或update。当用户同时拥有grant和revoke权限的时候才有权限使用update操作。 grant：赋权。 revoke：回收权限。 update：清空原来的所有权限，赋予本次提供的权限数组中的权限。
    * privileges  待赋权、回收或更新的权限列表。可操作的权限可以是以下三种权限中的一种或多种。 SUBMIT_JOB：提交作业 CANCEL_JOB ：取消作业 DROP_QUEUE ：删除队列 说明： 若需更新的权限列表为空，则表示回收用户在该队列的所有权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queueName' => null,
        'userName' => null,
        'action' => null,
        'privileges' => null
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
    * queueName  队列名称。
    * userName  被赋权用户名称。给该用户赋使用队列的权限，回收其使用权限，或者更新其使用权限。
    * action  指定赋权或回收。值为：grant，revoke或update。当用户同时拥有grant和revoke权限的时候才有权限使用update操作。 grant：赋权。 revoke：回收权限。 update：清空原来的所有权限，赋予本次提供的权限数组中的权限。
    * privileges  待赋权、回收或更新的权限列表。可操作的权限可以是以下三种权限中的一种或多种。 SUBMIT_JOB：提交作业 CANCEL_JOB ：取消作业 DROP_QUEUE ：删除队列 说明： 若需更新的权限列表为空，则表示回收用户在该队列的所有权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queueName' => 'queue_name',
            'userName' => 'user_name',
            'action' => 'action',
            'privileges' => 'privileges'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queueName  队列名称。
    * userName  被赋权用户名称。给该用户赋使用队列的权限，回收其使用权限，或者更新其使用权限。
    * action  指定赋权或回收。值为：grant，revoke或update。当用户同时拥有grant和revoke权限的时候才有权限使用update操作。 grant：赋权。 revoke：回收权限。 update：清空原来的所有权限，赋予本次提供的权限数组中的权限。
    * privileges  待赋权、回收或更新的权限列表。可操作的权限可以是以下三种权限中的一种或多种。 SUBMIT_JOB：提交作业 CANCEL_JOB ：取消作业 DROP_QUEUE ：删除队列 说明： 若需更新的权限列表为空，则表示回收用户在该队列的所有权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'queueName' => 'setQueueName',
            'userName' => 'setUserName',
            'action' => 'setAction',
            'privileges' => 'setPrivileges'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queueName  队列名称。
    * userName  被赋权用户名称。给该用户赋使用队列的权限，回收其使用权限，或者更新其使用权限。
    * action  指定赋权或回收。值为：grant，revoke或update。当用户同时拥有grant和revoke权限的时候才有权限使用update操作。 grant：赋权。 revoke：回收权限。 update：清空原来的所有权限，赋予本次提供的权限数组中的权限。
    * privileges  待赋权、回收或更新的权限列表。可操作的权限可以是以下三种权限中的一种或多种。 SUBMIT_JOB：提交作业 CANCEL_JOB ：取消作业 DROP_QUEUE ：删除队列 说明： 若需更新的权限列表为空，则表示回收用户在该队列的所有权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'queueName' => 'getQueueName',
            'userName' => 'getUserName',
            'action' => 'getAction',
            'privileges' => 'getPrivileges'
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
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['privileges'] = isset($data['privileges']) ? $data['privileges'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['queueName'] === null) {
            $invalidProperties[] = "'queueName' can't be null";
        }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['privileges'] === null) {
            $invalidProperties[] = "'privileges' can't be null";
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
    * Gets queueName
    *  队列名称。
    *
    * @return string
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string $queueName 队列名称。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets userName
    *  被赋权用户名称。给该用户赋使用队列的权限，回收其使用权限，或者更新其使用权限。
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 被赋权用户名称。给该用户赋使用队列的权限，回收其使用权限，或者更新其使用权限。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets action
    *  指定赋权或回收。值为：grant，revoke或update。当用户同时拥有grant和revoke权限的时候才有权限使用update操作。 grant：赋权。 revoke：回收权限。 update：清空原来的所有权限，赋予本次提供的权限数组中的权限。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 指定赋权或回收。值为：grant，revoke或update。当用户同时拥有grant和revoke权限的时候才有权限使用update操作。 grant：赋权。 revoke：回收权限。 update：清空原来的所有权限，赋予本次提供的权限数组中的权限。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets privileges
    *  待赋权、回收或更新的权限列表。可操作的权限可以是以下三种权限中的一种或多种。 SUBMIT_JOB：提交作业 CANCEL_JOB ：取消作业 DROP_QUEUE ：删除队列 说明： 若需更新的权限列表为空，则表示回收用户在该队列的所有权限。
    *
    * @return string[]
    */
    public function getPrivileges()
    {
        return $this->container['privileges'];
    }

    /**
    * Sets privileges
    *
    * @param string[] $privileges 待赋权、回收或更新的权限列表。可操作的权限可以是以下三种权限中的一种或多种。 SUBMIT_JOB：提交作业 CANCEL_JOB ：取消作业 DROP_QUEUE ：删除队列 说明： 若需更新的权限列表为空，则表示回收用户在该队列的所有权限。
    *
    * @return $this
    */
    public function setPrivileges($privileges)
    {
        $this->container['privileges'] = $privileges;
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

