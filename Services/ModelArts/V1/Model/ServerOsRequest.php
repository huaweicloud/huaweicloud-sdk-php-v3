<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerOsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerOsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminPass  **参数解释**：用于登录服务器密码。注意弹性云服务器和裸金属服务器admin_pass和key_pair_name必须二选一，超节点不支持admin_pass。 **约束限制**：密码规则： - 长度为8至26个 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **取值范围**：不涉及 **默认取值**：不涉及
    * keyPairName  **参数解释**：服务器登录密钥对名称。注意admin_pass和key_pair_name必须二选一。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
    * imageId  **参数解释**：镜像ID，切换操作系统场景，该参数必填。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
    * userData  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminPass' => 'string',
            'keyPairName' => 'string',
            'imageId' => 'string',
            'userData' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminPass  **参数解释**：用于登录服务器密码。注意弹性云服务器和裸金属服务器admin_pass和key_pair_name必须二选一，超节点不支持admin_pass。 **约束限制**：密码规则： - 长度为8至26个 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **取值范围**：不涉及 **默认取值**：不涉及
    * keyPairName  **参数解释**：服务器登录密钥对名称。注意admin_pass和key_pair_name必须二选一。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
    * imageId  **参数解释**：镜像ID，切换操作系统场景，该参数必填。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
    * userData  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminPass' => null,
        'keyPairName' => null,
        'imageId' => null,
        'userData' => null
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
    * adminPass  **参数解释**：用于登录服务器密码。注意弹性云服务器和裸金属服务器admin_pass和key_pair_name必须二选一，超节点不支持admin_pass。 **约束限制**：密码规则： - 长度为8至26个 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **取值范围**：不涉及 **默认取值**：不涉及
    * keyPairName  **参数解释**：服务器登录密钥对名称。注意admin_pass和key_pair_name必须二选一。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
    * imageId  **参数解释**：镜像ID，切换操作系统场景，该参数必填。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
    * userData  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminPass' => 'admin_pass',
            'keyPairName' => 'key_pair_name',
            'imageId' => 'image_id',
            'userData' => 'user_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminPass  **参数解释**：用于登录服务器密码。注意弹性云服务器和裸金属服务器admin_pass和key_pair_name必须二选一，超节点不支持admin_pass。 **约束限制**：密码规则： - 长度为8至26个 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **取值范围**：不涉及 **默认取值**：不涉及
    * keyPairName  **参数解释**：服务器登录密钥对名称。注意admin_pass和key_pair_name必须二选一。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
    * imageId  **参数解释**：镜像ID，切换操作系统场景，该参数必填。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
    * userData  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'adminPass' => 'setAdminPass',
            'keyPairName' => 'setKeyPairName',
            'imageId' => 'setImageId',
            'userData' => 'setUserData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminPass  **参数解释**：用于登录服务器密码。注意弹性云服务器和裸金属服务器admin_pass和key_pair_name必须二选一，超节点不支持admin_pass。 **约束限制**：密码规则： - 长度为8至26个 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **取值范围**：不涉及 **默认取值**：不涉及
    * keyPairName  **参数解释**：服务器登录密钥对名称。注意admin_pass和key_pair_name必须二选一。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
    * imageId  **参数解释**：镜像ID，切换操作系统场景，该参数必填。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
    * userData  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'adminPass' => 'getAdminPass',
            'keyPairName' => 'getKeyPairName',
            'imageId' => 'getImageId',
            'userData' => 'getUserData'
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
        $this->container['adminPass'] = isset($data['adminPass']) ? $data['adminPass'] : null;
        $this->container['keyPairName'] = isset($data['keyPairName']) ? $data['keyPairName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['adminPass']) && !preg_match("/^.{8,26}$/", $this->container['adminPass'])) {
                $invalidProperties[] = "invalid value for 'adminPass', must be conform to the pattern /^.{8,26}$/.";
            }
            if (!is_null($this->container['keyPairName']) && !preg_match("/^[-_.a-zA-Z0-9]{1,64}$/", $this->container['keyPairName'])) {
                $invalidProperties[] = "invalid value for 'keyPairName', must be conform to the pattern /^[-_.a-zA-Z0-9]{1,64}$/.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 36)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 36)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) < 0)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be bigger than or equal to 0.";
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
    * Gets adminPass
    *  **参数解释**：用于登录服务器密码。注意弹性云服务器和裸金属服务器admin_pass和key_pair_name必须二选一，超节点不支持admin_pass。 **约束限制**：密码规则： - 长度为8至26个 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **取值范围**：不涉及 **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getAdminPass()
    {
        return $this->container['adminPass'];
    }

    /**
    * Sets adminPass
    *
    * @param string|null $adminPass **参数解释**：用于登录服务器密码。注意弹性云服务器和裸金属服务器admin_pass和key_pair_name必须二选一，超节点不支持admin_pass。 **约束限制**：密码规则： - 长度为8至26个 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **取值范围**：不涉及 **默认取值**：不涉及
    *
    * @return $this
    */
    public function setAdminPass($adminPass)
    {
        $this->container['adminPass'] = $adminPass;
        return $this;
    }

    /**
    * Gets keyPairName
    *  **参数解释**：服务器登录密钥对名称。注意admin_pass和key_pair_name必须二选一。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getKeyPairName()
    {
        return $this->container['keyPairName'];
    }

    /**
    * Sets keyPairName
    *
    * @param string|null $keyPairName **参数解释**：服务器登录密钥对名称。注意admin_pass和key_pair_name必须二选一。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
    *
    * @return $this
    */
    public function setKeyPairName($keyPairName)
    {
        $this->container['keyPairName'] = $keyPairName;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**：镜像ID，切换操作系统场景，该参数必填。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
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
    * @param string|null $imageId **参数解释**：镜像ID，切换操作系统场景，该参数必填。 **约束限制**：不涉及。 **取值范围**：不涉及 **默认取值**：不涉及
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets userData
    *  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)][ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
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

