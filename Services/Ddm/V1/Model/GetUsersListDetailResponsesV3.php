<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetUsersListDetailResponsesV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetUsersListDetailResponsesV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：  DDM实例账号的名称。  **取值范围**：  不涉及。
    * status  **参数解释**：  DDM实例账号的状态。  **取值范围**：  不涉及。
    * baseAuthority  **参数解释**：  DDM实例账号的基础权限。  **取值范围**：  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * passwordLifetime  **参数解释**：  DDM实例账号密码的有效期。  **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。
    * passwordLastChanged  **参数解释**：  DDM实例账号密码最近一次的修改时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    * description  **参数解释**：  账号的描述信息。  **取值范围**：  不涉及。
    * created  **参数解释**：  DDM实例账号的创建时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    * databases  **参数解释**：  关联的逻辑库集合。账号只对已关联的逻辑库有访问权限。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'status' => 'string',
            'baseAuthority' => 'string[]',
            'passwordLifetime' => 'int',
            'passwordLastChanged' => 'string',
            'description' => 'string',
            'created' => 'string',
            'databases' => '\HuaweiCloud\SDK\Ddm\V1\Model\GetUsersListdatabaseV3[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：  DDM实例账号的名称。  **取值范围**：  不涉及。
    * status  **参数解释**：  DDM实例账号的状态。  **取值范围**：  不涉及。
    * baseAuthority  **参数解释**：  DDM实例账号的基础权限。  **取值范围**：  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * passwordLifetime  **参数解释**：  DDM实例账号密码的有效期。  **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。
    * passwordLastChanged  **参数解释**：  DDM实例账号密码最近一次的修改时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    * description  **参数解释**：  账号的描述信息。  **取值范围**：  不涉及。
    * created  **参数解释**：  DDM实例账号的创建时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    * databases  **参数解释**：  关联的逻辑库集合。账号只对已关联的逻辑库有访问权限。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'status' => null,
        'baseAuthority' => null,
        'passwordLifetime' => 'int64',
        'passwordLastChanged' => null,
        'description' => null,
        'created' => null,
        'databases' => null
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
    * name  **参数解释**：  DDM实例账号的名称。  **取值范围**：  不涉及。
    * status  **参数解释**：  DDM实例账号的状态。  **取值范围**：  不涉及。
    * baseAuthority  **参数解释**：  DDM实例账号的基础权限。  **取值范围**：  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * passwordLifetime  **参数解释**：  DDM实例账号密码的有效期。  **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。
    * passwordLastChanged  **参数解释**：  DDM实例账号密码最近一次的修改时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    * description  **参数解释**：  账号的描述信息。  **取值范围**：  不涉及。
    * created  **参数解释**：  DDM实例账号的创建时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    * databases  **参数解释**：  关联的逻辑库集合。账号只对已关联的逻辑库有访问权限。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'status' => 'status',
            'baseAuthority' => 'base_authority',
            'passwordLifetime' => 'password_lifetime',
            'passwordLastChanged' => 'password_last_changed',
            'description' => 'description',
            'created' => 'created',
            'databases' => 'databases'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：  DDM实例账号的名称。  **取值范围**：  不涉及。
    * status  **参数解释**：  DDM实例账号的状态。  **取值范围**：  不涉及。
    * baseAuthority  **参数解释**：  DDM实例账号的基础权限。  **取值范围**：  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * passwordLifetime  **参数解释**：  DDM实例账号密码的有效期。  **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。
    * passwordLastChanged  **参数解释**：  DDM实例账号密码最近一次的修改时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    * description  **参数解释**：  账号的描述信息。  **取值范围**：  不涉及。
    * created  **参数解释**：  DDM实例账号的创建时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    * databases  **参数解释**：  关联的逻辑库集合。账号只对已关联的逻辑库有访问权限。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'status' => 'setStatus',
            'baseAuthority' => 'setBaseAuthority',
            'passwordLifetime' => 'setPasswordLifetime',
            'passwordLastChanged' => 'setPasswordLastChanged',
            'description' => 'setDescription',
            'created' => 'setCreated',
            'databases' => 'setDatabases'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：  DDM实例账号的名称。  **取值范围**：  不涉及。
    * status  **参数解释**：  DDM实例账号的状态。  **取值范围**：  不涉及。
    * baseAuthority  **参数解释**：  DDM实例账号的基础权限。  **取值范围**：  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * passwordLifetime  **参数解释**：  DDM实例账号密码的有效期。  **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。
    * passwordLastChanged  **参数解释**：  DDM实例账号密码最近一次的修改时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    * description  **参数解释**：  账号的描述信息。  **取值范围**：  不涉及。
    * created  **参数解释**：  DDM实例账号的创建时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    * databases  **参数解释**：  关联的逻辑库集合。账号只对已关联的逻辑库有访问权限。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'status' => 'getStatus',
            'baseAuthority' => 'getBaseAuthority',
            'passwordLifetime' => 'getPasswordLifetime',
            'passwordLastChanged' => 'getPasswordLastChanged',
            'description' => 'getDescription',
            'created' => 'getCreated',
            'databases' => 'getDatabases'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['baseAuthority'] = isset($data['baseAuthority']) ? $data['baseAuthority'] : null;
        $this->container['passwordLifetime'] = isset($data['passwordLifetime']) ? $data['passwordLifetime'] : null;
        $this->container['passwordLastChanged'] = isset($data['passwordLastChanged']) ? $data['passwordLastChanged'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['baseAuthority'] === null) {
            $invalidProperties[] = "'baseAuthority' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['databases'] === null) {
            $invalidProperties[] = "'databases' can't be null";
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
    * Gets name
    *  **参数解释**：  DDM实例账号的名称。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**：  DDM实例账号的名称。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：  DDM实例账号的状态。  **取值范围**：  不涉及。
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
    * @param string $status **参数解释**：  DDM实例账号的状态。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets baseAuthority
    *  **参数解释**：  DDM实例账号的基础权限。  **取值范围**：  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    *
    * @return string[]
    */
    public function getBaseAuthority()
    {
        return $this->container['baseAuthority'];
    }

    /**
    * Sets baseAuthority
    *
    * @param string[] $baseAuthority **参数解释**：  DDM实例账号的基础权限。  **取值范围**：  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    *
    * @return $this
    */
    public function setBaseAuthority($baseAuthority)
    {
        $this->container['baseAuthority'] = $baseAuthority;
        return $this;
    }

    /**
    * Gets passwordLifetime
    *  **参数解释**：  DDM实例账号密码的有效期。  **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。
    *
    * @return int|null
    */
    public function getPasswordLifetime()
    {
        return $this->container['passwordLifetime'];
    }

    /**
    * Sets passwordLifetime
    *
    * @param int|null $passwordLifetime **参数解释**：  DDM实例账号密码的有效期。  **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。
    *
    * @return $this
    */
    public function setPasswordLifetime($passwordLifetime)
    {
        $this->container['passwordLifetime'] = $passwordLifetime;
        return $this;
    }

    /**
    * Gets passwordLastChanged
    *  **参数解释**：  DDM实例账号密码最近一次的修改时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getPasswordLastChanged()
    {
        return $this->container['passwordLastChanged'];
    }

    /**
    * Sets passwordLastChanged
    *
    * @param string|null $passwordLastChanged **参数解释**：  DDM实例账号密码最近一次的修改时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setPasswordLastChanged($passwordLastChanged)
    {
        $this->container['passwordLastChanged'] = $passwordLastChanged;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：  账号的描述信息。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description **参数解释**：  账号的描述信息。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets created
    *  **参数解释**：  DDM实例账号的创建时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string $created **参数解释**：  DDM实例账号的创建时间。  格式为yyyy-mm-ddThh:mm:ssZ。其中，T指定某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets databases
    *  **参数解释**：  关联的逻辑库集合。账号只对已关联的逻辑库有访问权限。  **取值范围**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\GetUsersListdatabaseV3[]
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\GetUsersListdatabaseV3[] $databases **参数解释**：  关联的逻辑库集合。账号只对已关联的逻辑库有访问权限。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
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

