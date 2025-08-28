<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCertificateOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCertificateOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：true
    * certificate  **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：不涉及  **取值范围**：PEM编码格式，最大长度65536个字符。  **默认取值**：不涉及
    * description  **参数解释**：证书的描述。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
    * domain  **参数解释**：服务器证书所签域名。  **约束限制**：该字段仅type为server时有效（其他类型证书，字段可传入，但不会生效）。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。  **默认取值**：不涉及
    * name  **参数解释**：证书的名称。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
    * privateKey  **参数解释**：服务器证书的私钥。  **约束限制**： - 当type为server和server_sm时，创建时必须传入。 - 当type为其他值时，字段无用，可以不传入；若传入则必须符合PEM格式。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * type  **参数解释**：证书的类型。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：server
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。创建时不传则资源属于default企业项目，返回enterprise_project_id=\"0\"。  **约束限制**：不能传入空字符串\"\"、\"0\"或不存在的企业项目ID。  **取值范围**：不涉及  **默认取值**：\"0\"  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * encCertificate  **参数解释**：服务器SM双证书的证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式。最大长度65536字符。  **默认取值**：不涉及
    * encPrivateKey  **参数解释**：服务器SM双证书的私钥。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    * scmCertificateId  **参数解释**：云证书管理服务（CCM）中的证书ID。  **约束限制**：仅记录证书ID，不验证其是否真实存在云证书管理服务中。并且需要将云证书管理服务中对应证书的内容手动设置到当前接口相应字段中（可能涉及字段certificate、private_key、enc_certificate和enc_private_key）  **取值范围**：不涉及  **默认取值**：不涉及
    * source  **参数解释**：标记当前证书来源。  **约束限制**：无  **取值范围**： - scm：表示关联云证书管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：当scm_certificate_id不为空，默认取值为\"scm\"。否则默认为空值。
    * protectionStatus  **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：nonProtection
    * protectionReason  **参数解释**：修改保护的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：不涉及  **默认取值**：空
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'certificate' => 'string',
            'description' => 'string',
            'domain' => 'string',
            'name' => 'string',
            'privateKey' => 'string',
            'projectId' => 'string',
            'type' => 'string',
            'enterpriseProjectId' => 'string',
            'encCertificate' => 'string',
            'encPrivateKey' => 'string',
            'scmCertificateId' => 'string',
            'source' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：true
    * certificate  **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：不涉及  **取值范围**：PEM编码格式，最大长度65536个字符。  **默认取值**：不涉及
    * description  **参数解释**：证书的描述。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
    * domain  **参数解释**：服务器证书所签域名。  **约束限制**：该字段仅type为server时有效（其他类型证书，字段可传入，但不会生效）。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。  **默认取值**：不涉及
    * name  **参数解释**：证书的名称。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
    * privateKey  **参数解释**：服务器证书的私钥。  **约束限制**： - 当type为server和server_sm时，创建时必须传入。 - 当type为其他值时，字段无用，可以不传入；若传入则必须符合PEM格式。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * type  **参数解释**：证书的类型。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：server
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。创建时不传则资源属于default企业项目，返回enterprise_project_id=\"0\"。  **约束限制**：不能传入空字符串\"\"、\"0\"或不存在的企业项目ID。  **取值范围**：不涉及  **默认取值**：\"0\"  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * encCertificate  **参数解释**：服务器SM双证书的证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式。最大长度65536字符。  **默认取值**：不涉及
    * encPrivateKey  **参数解释**：服务器SM双证书的私钥。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    * scmCertificateId  **参数解释**：云证书管理服务（CCM）中的证书ID。  **约束限制**：仅记录证书ID，不验证其是否真实存在云证书管理服务中。并且需要将云证书管理服务中对应证书的内容手动设置到当前接口相应字段中（可能涉及字段certificate、private_key、enc_certificate和enc_private_key）  **取值范围**：不涉及  **默认取值**：不涉及
    * source  **参数解释**：标记当前证书来源。  **约束限制**：无  **取值范围**： - scm：表示关联云证书管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：当scm_certificate_id不为空，默认取值为\"scm\"。否则默认为空值。
    * protectionStatus  **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：nonProtection
    * protectionReason  **参数解释**：修改保护的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：不涉及  **默认取值**：空
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'certificate' => null,
        'description' => null,
        'domain' => null,
        'name' => null,
        'privateKey' => null,
        'projectId' => null,
        'type' => null,
        'enterpriseProjectId' => null,
        'encCertificate' => null,
        'encPrivateKey' => null,
        'scmCertificateId' => null,
        'source' => null,
        'protectionStatus' => null,
        'protectionReason' => null
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
    * adminStateUp  **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：true
    * certificate  **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：不涉及  **取值范围**：PEM编码格式，最大长度65536个字符。  **默认取值**：不涉及
    * description  **参数解释**：证书的描述。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
    * domain  **参数解释**：服务器证书所签域名。  **约束限制**：该字段仅type为server时有效（其他类型证书，字段可传入，但不会生效）。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。  **默认取值**：不涉及
    * name  **参数解释**：证书的名称。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
    * privateKey  **参数解释**：服务器证书的私钥。  **约束限制**： - 当type为server和server_sm时，创建时必须传入。 - 当type为其他值时，字段无用，可以不传入；若传入则必须符合PEM格式。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * type  **参数解释**：证书的类型。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：server
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。创建时不传则资源属于default企业项目，返回enterprise_project_id=\"0\"。  **约束限制**：不能传入空字符串\"\"、\"0\"或不存在的企业项目ID。  **取值范围**：不涉及  **默认取值**：\"0\"  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * encCertificate  **参数解释**：服务器SM双证书的证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式。最大长度65536字符。  **默认取值**：不涉及
    * encPrivateKey  **参数解释**：服务器SM双证书的私钥。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    * scmCertificateId  **参数解释**：云证书管理服务（CCM）中的证书ID。  **约束限制**：仅记录证书ID，不验证其是否真实存在云证书管理服务中。并且需要将云证书管理服务中对应证书的内容手动设置到当前接口相应字段中（可能涉及字段certificate、private_key、enc_certificate和enc_private_key）  **取值范围**：不涉及  **默认取值**：不涉及
    * source  **参数解释**：标记当前证书来源。  **约束限制**：无  **取值范围**： - scm：表示关联云证书管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：当scm_certificate_id不为空，默认取值为\"scm\"。否则默认为空值。
    * protectionStatus  **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：nonProtection
    * protectionReason  **参数解释**：修改保护的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：不涉及  **默认取值**：空
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'certificate' => 'certificate',
            'description' => 'description',
            'domain' => 'domain',
            'name' => 'name',
            'privateKey' => 'private_key',
            'projectId' => 'project_id',
            'type' => 'type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'encCertificate' => 'enc_certificate',
            'encPrivateKey' => 'enc_private_key',
            'scmCertificateId' => 'scm_certificate_id',
            'source' => 'source',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：true
    * certificate  **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：不涉及  **取值范围**：PEM编码格式，最大长度65536个字符。  **默认取值**：不涉及
    * description  **参数解释**：证书的描述。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
    * domain  **参数解释**：服务器证书所签域名。  **约束限制**：该字段仅type为server时有效（其他类型证书，字段可传入，但不会生效）。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。  **默认取值**：不涉及
    * name  **参数解释**：证书的名称。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
    * privateKey  **参数解释**：服务器证书的私钥。  **约束限制**： - 当type为server和server_sm时，创建时必须传入。 - 当type为其他值时，字段无用，可以不传入；若传入则必须符合PEM格式。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * type  **参数解释**：证书的类型。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：server
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。创建时不传则资源属于default企业项目，返回enterprise_project_id=\"0\"。  **约束限制**：不能传入空字符串\"\"、\"0\"或不存在的企业项目ID。  **取值范围**：不涉及  **默认取值**：\"0\"  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * encCertificate  **参数解释**：服务器SM双证书的证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式。最大长度65536字符。  **默认取值**：不涉及
    * encPrivateKey  **参数解释**：服务器SM双证书的私钥。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    * scmCertificateId  **参数解释**：云证书管理服务（CCM）中的证书ID。  **约束限制**：仅记录证书ID，不验证其是否真实存在云证书管理服务中。并且需要将云证书管理服务中对应证书的内容手动设置到当前接口相应字段中（可能涉及字段certificate、private_key、enc_certificate和enc_private_key）  **取值范围**：不涉及  **默认取值**：不涉及
    * source  **参数解释**：标记当前证书来源。  **约束限制**：无  **取值范围**： - scm：表示关联云证书管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：当scm_certificate_id不为空，默认取值为\"scm\"。否则默认为空值。
    * protectionStatus  **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：nonProtection
    * protectionReason  **参数解释**：修改保护的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：不涉及  **默认取值**：空
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'certificate' => 'setCertificate',
            'description' => 'setDescription',
            'domain' => 'setDomain',
            'name' => 'setName',
            'privateKey' => 'setPrivateKey',
            'projectId' => 'setProjectId',
            'type' => 'setType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'encCertificate' => 'setEncCertificate',
            'encPrivateKey' => 'setEncPrivateKey',
            'scmCertificateId' => 'setScmCertificateId',
            'source' => 'setSource',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：true
    * certificate  **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：不涉及  **取值范围**：PEM编码格式，最大长度65536个字符。  **默认取值**：不涉及
    * description  **参数解释**：证书的描述。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
    * domain  **参数解释**：服务器证书所签域名。  **约束限制**：该字段仅type为server时有效（其他类型证书，字段可传入，但不会生效）。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。  **默认取值**：不涉及
    * name  **参数解释**：证书的名称。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
    * privateKey  **参数解释**：服务器证书的私钥。  **约束限制**： - 当type为server和server_sm时，创建时必须传入。 - 当type为其他值时，字段无用，可以不传入；若传入则必须符合PEM格式。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * type  **参数解释**：证书的类型。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：server
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。创建时不传则资源属于default企业项目，返回enterprise_project_id=\"0\"。  **约束限制**：不能传入空字符串\"\"、\"0\"或不存在的企业项目ID。  **取值范围**：不涉及  **默认取值**：\"0\"  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * encCertificate  **参数解释**：服务器SM双证书的证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式。最大长度65536字符。  **默认取值**：不涉及
    * encPrivateKey  **参数解释**：服务器SM双证书的私钥。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    * scmCertificateId  **参数解释**：云证书管理服务（CCM）中的证书ID。  **约束限制**：仅记录证书ID，不验证其是否真实存在云证书管理服务中。并且需要将云证书管理服务中对应证书的内容手动设置到当前接口相应字段中（可能涉及字段certificate、private_key、enc_certificate和enc_private_key）  **取值范围**：不涉及  **默认取值**：不涉及
    * source  **参数解释**：标记当前证书来源。  **约束限制**：无  **取值范围**： - scm：表示关联云证书管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：当scm_certificate_id不为空，默认取值为\"scm\"。否则默认为空值。
    * protectionStatus  **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：nonProtection
    * protectionReason  **参数解释**：修改保护的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：不涉及  **默认取值**：空
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'certificate' => 'getCertificate',
            'description' => 'getDescription',
            'domain' => 'getDomain',
            'name' => 'getName',
            'privateKey' => 'getPrivateKey',
            'projectId' => 'getProjectId',
            'type' => 'getType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'encCertificate' => 'getEncCertificate',
            'encPrivateKey' => 'getEncPrivateKey',
            'scmCertificateId' => 'getScmCertificateId',
            'source' => 'getSource',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason'
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
    const TYPE_SERVER = 'server';
    const TYPE_CLIENT = 'client';
    const TYPE_SERVER_SM = 'server_sm';
    const PROTECTION_STATUS_NON_PROTECTION = 'nonProtection';
    const PROTECTION_STATUS_CONSOLE_PROTECTION = 'consoleProtection';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SERVER,
            self::TYPE_CLIENT,
            self::TYPE_SERVER_SM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectionStatusAllowableValues()
    {
        return [
            self::PROTECTION_STATUS_NON_PROTECTION,
            self::PROTECTION_STATUS_CONSOLE_PROTECTION,
        ];
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['encCertificate'] = isset($data['encCertificate']) ? $data['encCertificate'] : null;
        $this->container['encPrivateKey'] = isset($data['encPrivateKey']) ? $data['encPrivateKey'] : null;
        $this->container['scmCertificateId'] = isset($data['scmCertificateId']) ? $data['scmCertificateId'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 10000)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 0)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getProtectionStatusAllowableValues();
                if (!is_null($this->container['protectionStatus']) && !in_array($this->container['protectionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets adminStateUp
    *  **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：true
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **约束限制**：不涉及  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。  **默认取值**：true
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets certificate
    *  **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：不涉及  **取值范围**：PEM编码格式，最大长度65536个字符。  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param string|null $certificate **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：不涉及  **取值范围**：PEM编码格式，最大长度65536个字符。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：证书的描述。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**：证书的描述。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets domain
    *  **参数解释**：服务器证书所签域名。  **约束限制**：该字段仅type为server时有效（其他类型证书，字段可传入，但不会生效）。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain **参数解释**：服务器证书所签域名。  **约束限制**：该字段仅type为server时有效（其他类型证书，字段可传入，但不会生效）。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：证书的名称。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
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
    * @param string|null $name **参数解释**：证书的名称。  **约束限制**：不涉及  **取值范围**：0-255个字符。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets privateKey
    *  **参数解释**：服务器证书的私钥。  **约束限制**： - 当type为server和server_sm时，创建时必须传入。 - 当type为其他值时，字段无用，可以不传入；若传入则必须符合PEM格式。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string|null $privateKey **参数解释**：服务器证书的私钥。  **约束限制**： - 当type为server和server_sm时，创建时必须传入。 - 当type为其他值时，字段无用，可以不传入；若传入则必须符合PEM格式。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：证书的类型。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：server
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：证书的类型。  **约束限制**：不涉及  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。  **默认取值**：server
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**：资源所属的企业项目ID。创建时不传则资源属于default企业项目，返回enterprise_project_id=\"0\"。  **约束限制**：不能传入空字符串\"\"、\"0\"或不存在的企业项目ID。  **取值范围**：不涉及  **默认取值**：\"0\"  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**：资源所属的企业项目ID。创建时不传则资源属于default企业项目，返回enterprise_project_id=\"0\"。  **约束限制**：不能传入空字符串\"\"、\"0\"或不存在的企业项目ID。  **取值范围**：不涉及  **默认取值**：\"0\"  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets encCertificate
    *  **参数解释**：服务器SM双证书的证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式。最大长度65536字符。  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getEncCertificate()
    {
        return $this->container['encCertificate'];
    }

    /**
    * Sets encCertificate
    *
    * @param string|null $encCertificate **参数解释**：服务器SM双证书的证书内容。支持最大11层证书链(含证书和证书链)。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式。最大长度65536字符。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setEncCertificate($encCertificate)
    {
        $this->container['encCertificate'] = $encCertificate;
        return $this;
    }

    /**
    * Gets encPrivateKey
    *  **参数解释**：服务器SM双证书的私钥。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getEncPrivateKey()
    {
        return $this->container['encPrivateKey'];
    }

    /**
    * Sets encPrivateKey
    *
    * @param string|null $encPrivateKey **参数解释**：服务器SM双证书的私钥。  **约束限制**：仅当type为server_sm时，才支持且必须传入。  **取值范围**：PEM编码格式，最大长度8192个字符。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setEncPrivateKey($encPrivateKey)
    {
        $this->container['encPrivateKey'] = $encPrivateKey;
        return $this;
    }

    /**
    * Gets scmCertificateId
    *  **参数解释**：云证书管理服务（CCM）中的证书ID。  **约束限制**：仅记录证书ID，不验证其是否真实存在云证书管理服务中。并且需要将云证书管理服务中对应证书的内容手动设置到当前接口相应字段中（可能涉及字段certificate、private_key、enc_certificate和enc_private_key）  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getScmCertificateId()
    {
        return $this->container['scmCertificateId'];
    }

    /**
    * Sets scmCertificateId
    *
    * @param string|null $scmCertificateId **参数解释**：云证书管理服务（CCM）中的证书ID。  **约束限制**：仅记录证书ID，不验证其是否真实存在云证书管理服务中。并且需要将云证书管理服务中对应证书的内容手动设置到当前接口相应字段中（可能涉及字段certificate、private_key、enc_certificate和enc_private_key）  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setScmCertificateId($scmCertificateId)
    {
        $this->container['scmCertificateId'] = $scmCertificateId;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释**：标记当前证书来源。  **约束限制**：无  **取值范围**： - scm：表示关联云证书管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：当scm_certificate_id不为空，默认取值为\"scm\"。否则默认为空值。
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source **参数解释**：标记当前证书来源。  **约束限制**：无  **取值范围**： - scm：表示关联云证书管理服务（CCM）中的证书。 - 空值：表示自有证书。  **默认取值**：当scm_certificate_id不为空，默认取值为\"scm\"。否则默认为空值。
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets protectionStatus
    *  **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：nonProtection
    *
    * @return string|null
    */
    public function getProtectionStatus()
    {
        return $this->container['protectionStatus'];
    }

    /**
    * Sets protectionStatus
    *
    * @param string|null $protectionStatus **参数解释**：修改保护状态。  **约束限制**：不涉及  **取值范围**： - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。  **默认取值**：nonProtection
    *
    * @return $this
    */
    public function setProtectionStatus($protectionStatus)
    {
        $this->container['protectionStatus'] = $protectionStatus;
        return $this;
    }

    /**
    * Gets protectionReason
    *  **参数解释**：修改保护的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：不涉及  **默认取值**：空
    *
    * @return string|null
    */
    public function getProtectionReason()
    {
        return $this->container['protectionReason'];
    }

    /**
    * Sets protectionReason
    *
    * @param string|null $protectionReason **参数解释**：修改保护的原因。  **约束限制**：仅当protection_status为consoleProtection时有效。  **取值范围**：不涉及  **默认取值**：空
    *
    * @return $this
    */
    public function setProtectionReason($protectionReason)
    {
        $this->container['protectionReason'] = $protectionReason;
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

