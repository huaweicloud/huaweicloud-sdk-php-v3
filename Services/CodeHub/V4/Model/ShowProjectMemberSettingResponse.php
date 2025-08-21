<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProjectMemberSettingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProjectMemberSettingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productId  **参数解释：** 项目id **取值范围：** 字符串长度不少于1，不超过1000。
    * syncEnabled  **参数解释：** 同步开关
    * syncAllRoleEnabled  **参数解释：** 同步所有角色开关
    * roleSync  **参数解释：** 角色同步
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productId' => 'string',
            'syncEnabled' => 'bool',
            'syncAllRoleEnabled' => 'bool',
            'roleSync' => '\HuaweiCloud\SDK\CodeHub\V4\Model\RoleSyncDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productId  **参数解释：** 项目id **取值范围：** 字符串长度不少于1，不超过1000。
    * syncEnabled  **参数解释：** 同步开关
    * syncAllRoleEnabled  **参数解释：** 同步所有角色开关
    * roleSync  **参数解释：** 角色同步
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productId' => null,
        'syncEnabled' => null,
        'syncAllRoleEnabled' => null,
        'roleSync' => null
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
    * productId  **参数解释：** 项目id **取值范围：** 字符串长度不少于1，不超过1000。
    * syncEnabled  **参数解释：** 同步开关
    * syncAllRoleEnabled  **参数解释：** 同步所有角色开关
    * roleSync  **参数解释：** 角色同步
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productId' => 'product_id',
            'syncEnabled' => 'sync_enabled',
            'syncAllRoleEnabled' => 'sync_all_role_enabled',
            'roleSync' => 'role_sync'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productId  **参数解释：** 项目id **取值范围：** 字符串长度不少于1，不超过1000。
    * syncEnabled  **参数解释：** 同步开关
    * syncAllRoleEnabled  **参数解释：** 同步所有角色开关
    * roleSync  **参数解释：** 角色同步
    *
    * @var string[]
    */
    protected static $setters = [
            'productId' => 'setProductId',
            'syncEnabled' => 'setSyncEnabled',
            'syncAllRoleEnabled' => 'setSyncAllRoleEnabled',
            'roleSync' => 'setRoleSync'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productId  **参数解释：** 项目id **取值范围：** 字符串长度不少于1，不超过1000。
    * syncEnabled  **参数解释：** 同步开关
    * syncAllRoleEnabled  **参数解释：** 同步所有角色开关
    * roleSync  **参数解释：** 角色同步
    *
    * @var string[]
    */
    protected static $getters = [
            'productId' => 'getProductId',
            'syncEnabled' => 'getSyncEnabled',
            'syncAllRoleEnabled' => 'getSyncAllRoleEnabled',
            'roleSync' => 'getRoleSync'
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
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['syncEnabled'] = isset($data['syncEnabled']) ? $data['syncEnabled'] : null;
        $this->container['syncAllRoleEnabled'] = isset($data['syncAllRoleEnabled']) ? $data['syncAllRoleEnabled'] : null;
        $this->container['roleSync'] = isset($data['roleSync']) ? $data['roleSync'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) < 1)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 1.";
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
    * Gets productId
    *  **参数解释：** 项目id **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId **参数解释：** 项目id **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets syncEnabled
    *  **参数解释：** 同步开关
    *
    * @return bool|null
    */
    public function getSyncEnabled()
    {
        return $this->container['syncEnabled'];
    }

    /**
    * Sets syncEnabled
    *
    * @param bool|null $syncEnabled **参数解释：** 同步开关
    *
    * @return $this
    */
    public function setSyncEnabled($syncEnabled)
    {
        $this->container['syncEnabled'] = $syncEnabled;
        return $this;
    }

    /**
    * Gets syncAllRoleEnabled
    *  **参数解释：** 同步所有角色开关
    *
    * @return bool|null
    */
    public function getSyncAllRoleEnabled()
    {
        return $this->container['syncAllRoleEnabled'];
    }

    /**
    * Sets syncAllRoleEnabled
    *
    * @param bool|null $syncAllRoleEnabled **参数解释：** 同步所有角色开关
    *
    * @return $this
    */
    public function setSyncAllRoleEnabled($syncAllRoleEnabled)
    {
        $this->container['syncAllRoleEnabled'] = $syncAllRoleEnabled;
        return $this;
    }

    /**
    * Gets roleSync
    *  **参数解释：** 角色同步
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\RoleSyncDto[]|null
    */
    public function getRoleSync()
    {
        return $this->container['roleSync'];
    }

    /**
    * Sets roleSync
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\RoleSyncDto[]|null $roleSync **参数解释：** 角色同步
    *
    * @return $this
    */
    public function setRoleSync($roleSync)
    {
        $this->container['roleSync'] = $roleSync;
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

