<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchChangeInstanceSpecificationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchChangeInstanceSpecificationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceIds  **参数解释**：  批量规格变更的实例ID列表。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  实例ID只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * specCode  **参数解释**：  规格码。  获取方法请参见[查询数据库规格](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlFlavors.html)中的响应参数\"spec_code\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * isAutoPay  **参数解释**：  批量变更包年/包月实例规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：  不涉及。  **取值范围**： - true：自动支付，默认该方式。 - false：手动支付。  **默认取值**：  true。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceIds' => 'string[]',
            'specCode' => 'string',
            'isAutoPay' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceIds  **参数解释**：  批量规格变更的实例ID列表。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  实例ID只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * specCode  **参数解释**：  规格码。  获取方法请参见[查询数据库规格](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlFlavors.html)中的响应参数\"spec_code\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * isAutoPay  **参数解释**：  批量变更包年/包月实例规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：  不涉及。  **取值范围**： - true：自动支付，默认该方式。 - false：手动支付。  **默认取值**：  true。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceIds' => null,
        'specCode' => null,
        'isAutoPay' => null
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
    * instanceIds  **参数解释**：  批量规格变更的实例ID列表。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  实例ID只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * specCode  **参数解释**：  规格码。  获取方法请参见[查询数据库规格](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlFlavors.html)中的响应参数\"spec_code\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * isAutoPay  **参数解释**：  批量变更包年/包月实例规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：  不涉及。  **取值范围**： - true：自动支付，默认该方式。 - false：手动支付。  **默认取值**：  true。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceIds' => 'instance_ids',
            'specCode' => 'spec_code',
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceIds  **参数解释**：  批量规格变更的实例ID列表。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  实例ID只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * specCode  **参数解释**：  规格码。  获取方法请参见[查询数据库规格](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlFlavors.html)中的响应参数\"spec_code\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * isAutoPay  **参数解释**：  批量变更包年/包月实例规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：  不涉及。  **取值范围**： - true：自动支付，默认该方式。 - false：手动支付。  **默认取值**：  true。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceIds' => 'setInstanceIds',
            'specCode' => 'setSpecCode',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceIds  **参数解释**：  批量规格变更的实例ID列表。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  实例ID只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    * specCode  **参数解释**：  规格码。  获取方法请参见[查询数据库规格](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlFlavors.html)中的响应参数\"spec_code\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * isAutoPay  **参数解释**：  批量变更包年/包月实例规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：  不涉及。  **取值范围**： - true：自动支付，默认该方式。 - false：手动支付。  **默认取值**：  true。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceIds' => 'getInstanceIds',
            'specCode' => 'getSpecCode',
            'isAutoPay' => 'getIsAutoPay'
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
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceIds'] === null) {
            $invalidProperties[] = "'instanceIds' can't be null";
        }
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
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
    * Gets instanceIds
    *  **参数解释**：  批量规格变更的实例ID列表。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  实例ID只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return string[]
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param string[] $instanceIds **参数解释**：  批量规格变更的实例ID列表。  获取方法请参见[查询实例列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlInstancesUnifyStatus.html)。  **约束限制**：  不涉及。  **取值范围**：  实例ID只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets specCode
    *  **参数解释**：  规格码。  获取方法请参见[查询数据库规格](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlFlavors.html)中的响应参数\"spec_code\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string $specCode **参数解释**：  规格码。  获取方法请参见[查询数据库规格](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlFlavors.html)中的响应参数\"spec_code\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  **参数解释**：  批量变更包年/包月实例规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：  不涉及。  **取值范围**： - true：自动支付，默认该方式。 - false：手动支付。  **默认取值**：  true。
    *
    * @return string|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param string|null $isAutoPay **参数解释**：  批量变更包年/包月实例规格时可指定，表示是否自动从客户的账户中支付。  **约束限制**：  不涉及。  **取值范围**： - true：自动支付，默认该方式。 - false：手动支付。  **默认取值**：  true。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
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

